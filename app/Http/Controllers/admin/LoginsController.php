<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Model\admin_info;
use Hash;

class LoginsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.login');
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
        //
        
        $res = $request->except('_token');
         
      
           if($res['uname']==null && $res['password']==null){
         return redirect('/admin/login')->with('msg','您输入的用户名或密码不能为空');
       }
          $uname = admin_info::where('uname',$res['uname'])->first();

        // dd($uname);
        if($uname['uname']!=$res['uname']){

            return redirect('/admin/login')->with('msg','您输入的用户名或密码错误');
        }

        if(!Hash::check($res['password'],$uname->password)){

            return redirect('/admin/login')->with('msg','您输入的用户名或密码错误');
        }
        if($uname['auth']==0){
            return redirect('/admin/login')->with('msg','你的权限不够');
        }
       

        //存session
        // session(['uid'=>$uname->id]);
        $request->session()->put('admin_id',$uname->id);

        
        

        return redirect('/admin/user');
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
    public function destroy(Request $request,$id)
    {
        //
        $bool=$request->session()->flush();
     //dd($bool);
        if($bool==null){
            return view('admin.login');
        }
    }
}
