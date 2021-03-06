<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\model\user;
use App\Http\model\info;
use App\Http\model\lists;
use Gregwar\Captcha\CaptchaBuilder;
use Flc\Dysms\Client;
use Flc\Dysms\Request\SendSms;
use Session;
use Cookie;
use Hash;


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

        $tels = user::where('tel',$res['tel'])->first();
        
        if(!$tels){
        /*    return $data = [
            'status'=>'0',
            'info'=>'请输入正确的手机号'
            ];*/
            return redirect('/index')->with('msg','请输入正确的手机号');
       
        }

        if(!Hash::check($res['password'],$tels->password)){

            /*return $data = [
            'status'=>'1',
            'info'=>'您输入的手机号或密码错误'
            ];*/
            return redirect('/index')->with('msg','您输入的手机号或密码错误');
        }
        
        
        if(empty($res['code']) && session('vcode') != $res['code']){

           /* return $data = [
            'status'=>'2',
            'info'=>'验证码错误'
            ];*/
            return redirect('/index')->with('msg','验证码错误');
        }

        //存session
        $request->session()->put('uid',$tels->id);
        $result = info::where('user_id',$tels->id)->first();

        if(!$result){
            $data = info::insert(['user_id'=>$tels->id]);
           
        }

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
        return redirect('')->with(['type'=>$type,'user'=>$user,'cont'=>$cont]);
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
    public function edit(Request $request)
    {   

        //修改密码时,获取验证码
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
        Cookie::queue('codes',$code,300);
        Cookie::queue('tel',$res,300);
        $resp = $client->execute($sendSms);          
        
        return view('home.user.edit');
        /*return response('')->withCookie(Cookie('codes',$code,300));
        return response('')->withCookie(Cookie('tel',$res,300));*/
    }

    public function update(Request $request)
    {   
        
        //执行修改
        
        $res = $request->except('_token');
        $tels = user::where('tel',$res['tel'])->first();

        if(Cookie::get('codes') != $res['code']){
            return redirect('/homed')->with('msg','验证码错误');
        }

        if(!$tels){
            return redirect('/index')->with('msg','请输入正确的手机号');
        }

        $data = $request->except('_token','code','tel');
        $data['password'] = Hash::make($res['password']);
        $datas = user::where('tel',Cookie::get('tel'))->update($data);
        
        if($datas){
            
            return view('home.user.login')->with('修改成功,请登录');

        }      
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
