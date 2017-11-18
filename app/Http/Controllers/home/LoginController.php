<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\model\user;
use Gregwar\Captcha\CaptchaBuilder;
use Session;
use Hash;
use DB;
class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.login');
        
    }

    public function dologin(Request $request)
    {
        $res = $request->except('_token');

        $tels = DB::table('user')->where('tel',$res['tel'])->first();
        //$tels = user::where('tel',$res['tel'])->first();
        //var_dump($tels);die;
        
        if(!$tels){

            return redirect('/home/index')->with('msg','您输入的手机号错误');
        }

        if(!Hash::check($res['password'],$tels->password)){

            return redirect('/home/index')->with('msg','您输入的手机号或密码错误');
        }

        if(session('vcode') != $res['code']){

            return redirect('/home/index')->with('msg','验证码错误');

        }

        //存session
        // session(['uid'=>$uname->id]);
        $request->session()->put('uid',$tels->id);


        return view('welcome');
    }
   
    public function code()
    {

        //生成验证码图片的Builder对象，配置相应属性
        $builder = new CaptchaBuilder;

        //可以设置图片宽高及字体
        $builder->build($width = 120, $height = 40, $font = null);

        //获取验证码的内容
        $phrase = $builder->getPhrase();

        //把内容存入session
        Session::flash('vcode', $phrase);
        //生成图片
        header("Cache-Control: no-cache, must-revalidate");
        header('Content-Type: image/jpeg');
        $builder->output();

    }

   
}
