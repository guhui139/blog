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
use App\Http\Model\Type;
use App\Http\Model\info;
use App\Http\Model\list_content;
use App\Http\Model\lists;


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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $res = $request->except('_token');

        $tels = DB::table('user')->where('tel',$res['tel'])->first();
        //$tels = user::where('tel',$res['tel'])->first();
        //var_dump($tels);die;
        if(!$tels){
            return redirect('/index')->with('msg','请输入正确的手机号');
        }

        if(!$tels and !Hash::check($res['password'],$tels->password)){

            return redirect('/index')->with('msg','您输入的手机号或密码错误');
        }

        if(session('vcode') != $res['code']){

            return redirect('/index')->with('msg','验证码错误');

        }

        //存session
        // session(['uid'=>$uname->id]);
        $request->session()->put('uid',$tels->id);
        $type = $request->session()->get('type');
        $user = info::where('user_id',session('uid'))->first();
        $cont = lists::join('list_content','list_content.list_id','=','lists.id')
                        ->join('info','info.user_id','=','lists.info_id')
                        ->join('type','type.id','=','lists.type_id')
                        ->select('info.uname','info.img','lists.*','list_content.content','type.name')
                        ->orderBy('lists.zan','desc')
                        ->get();
        $user = info::where('user_id',session('uid'))->first();
        Session::put('info',$user);
        return view('home.index',['type'=>$type,'user'=>$user,'cont'=>$cont]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
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
