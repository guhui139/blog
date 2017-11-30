<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Flc\Dysms\Client;
use Flc\Dysms\Request\SendSms;
use Hash;
use DB;
use Cookie;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('home.register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $res = $request->except('_token','repassword');
       
        
        $phones = DB::table('user')->where('tel',$res['tel'])->first();
    
        if($phones){

            return redirect('/register')->with('msg','您输入的手机号已注册');
        }

        

        if(Cookie::get('codes') != $res['code']){

            return redirect('/register')->with('msg','验证码错误');

        }
         
        //存session
        //$request->session()->put('uid',$phones->id);
        $ress = $request->except('_token','repassword','code');
        $ress['password'] = Hash::make($ress['password']);
        $data = DB::table('user')->insertGetId($ress);
        DB::table('info')->insert(['user_id'=>$data]);
        return redirect('/')->with('msg','注册成功,请登录');
        
        
        
        
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

    public function sendcode(Request $request)
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
        return redirect('/home/create');
       
       
    }
}
