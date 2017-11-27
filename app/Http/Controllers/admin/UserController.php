<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Model\admin_info;
use Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
          $res = admin_info::where('uname','like','%'.$request->input('search').'%')->
            orderBy('id','asc')->
            paginate($request->input('num',5));
            
             //dd($res);
         return view('admin.user.index',['res'=>$res,'request'=>$request,'search'=>$request->input('search')]);
         
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/user/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


          //表单验证
        $this->validate($request, [
            'uname' => 'required|regex:/^\w{6,12}$/',
            'password' => 'required|regex:/^\S{6,16}$/',
            'phone' => 'required|regex:/^1[34578]\d{9}$/',
            'email' => 'required|email'
          
        ],[

            'uname.required' => '用户名不能为空',
            'password.regex' => '密码格式不正确',
           
            'phone.required' => '手机号不能为空',
            'phone.regex' => '手机号格式不正确',
            'email.required' => '邮箱不能为空',
            'email.email' => '邮箱格式不正确'

        ]);
        
        if($request->hasFile('profile')){

            $res = $request->except('_token','repass','profile');
            $name = rand(1111,9999).time();
            $suffix = $request->file('profile')->getClientOriginalExtension();
            $request->file('profile')->move('./Uploads/',$name.'.'.$suffix);
        }
            $res['profile']='Uploads/'.$name.'.'.$suffix;
        
            $res['password']=Hash::make($request->input('password'));

          //$res = $request->except('_token');

          
          
          $bool=admin_info::insert($res);
          if($bool){
            return redirect()->route('admin.user.index');
        }else{
             return redirect()->route('admin.user.index');
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
        //
        $res=admin_info::where('id',$id)->first();
        return view('admin/user/edit',['res'=>$res]);
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
        
        $res = $request->except('_token','_method');
         
        $data = admin_info::where('id',$id)->update($res);
        
        if($data){
            return redirect('/admin/user');
        }else{
            return back();
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
        
        $res=admin_info::where("id",'=',$id)->delete();
        if($res){
            return redirect()->route('admin.user.index');
        }else{
             return redirect()->route('admin.user.index');
        }
    }
}
