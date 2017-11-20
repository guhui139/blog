<?php

namespace App\Http\Controllers\home;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Model\User;
use App\Http\Model\info;
use Gregwar\Captcha\CaptchaBuilder;
use Session;
use Cookie;
use Hash;
use Flc\Dysms\Client;
use Flc\Dysms\Request\SendSms;

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
        $tels = user::where('tel',$res['tel'])->first();
        
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
        
        $request->session()->put('uid',$tels->id);
        $data = info::insert(['user_id'=>$tels->id]);
        //login();
        if($data){
           
             return view('home.index');
        }
    
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

   
    public function edit(Request $request)
    {   
        $res = $request->input('tel');
       
        $config = [
                'accessKeyId'    => 'LTAIglltnURip7gN',
                'accessKeySecret' => 'NNBfufyZetEkX25Kn5PWQ4bn6drXYC',
            ];

        $client  = new Client($config);
        $sendSms = new SendSms;
        $sendSms->setPhoneNumbers($res);
        $sendSms->setSignName('言梦');
        $sendSms->setTemplateCode('SMS_110835228');
        $code = rand(100000, 999999);
        $sendSms->setTemplateParam(['code' =>$code ]);
        $sendSms->setOutId('demo');

        $resp = $client->execute($sendSms);          
        Cookie::queue('codes',$code,300);
        Cookie::queue('tel',$res,300);
        return view('home.user.edit');
    }

     public function update(Request $request)
    {      
      
        $res = $request->except('_token','code','tel');
       
        $ress = user::where('tel',Cookie::get('tel'))->update($res);
        
        if($ress){
            
            return redirect('/home/index')->with('msg','密码修改成功,请登录');

        }      
    }
}
