<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Model\User;
use App\Http\Model\info;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Flc\Dysms\Client;
use Flc\Dysms\Request\SendSms;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$data = DB::table('info')->get();
        //dd($data);
        return view('home.user.info');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home.user.info');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request, [
            'uname' => 'required|regex:/^\S{6,12}$/',     
            'email'=>'required|email'         
            
        ],[
            'uname.required'=>'用户名不能为空!!!!!',
            'username.regex'=>'用户名格式不正确',          
            'email.required'=>'邮箱不能为空',
            'email.email'=>'邮箱格式不正确'
        ]);

        //文件上传
        if($request->hasFile('img')){

            //修改名字
            $name = rand(1111,9999).time();

            //获取后缀
            $suffix = $request->file('img')->getClientOriginalExtension();

            //移动图片
            $request->file('img')->move('./Upload',$name.'.'.$suffix);

            $res['img'] = '/Upload/'.$name.'.'.$suffix;
        }

        $res = $request->except('_token','img');
      
        $res['user_id'] = session('uid');

        $datas = info::where('user_id',$res['user_id'])->update($res);
        if($datas){

            return redirect('/home/user')->with('msg','设置成功');
        } else {

            return back()->withInput();
        }
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
}
