<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Model\admin_info;

class CenterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        return view('admin.center.edit',['res'=>$res]);
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

         $res = $request->except('_token','_method');

          if($request->hasFile('profile')){

            $res = $request->except('_token','repass','profile','_method');
            $name = rand(1111,9999).time();
            $suffix = $request->file('profile')->getClientOriginalExtension();
            $request->file('profile')->move('./Uploads/',$name.'.'.$suffix);
        
            $res['profile']='Uploads/'.$name.'.'.$suffix;
        }
         // dd($res);
        $data = admin_info::where('id',$id)->update($res);
        // dd($data);
        if($data){
            return redirect('/admin/user');
        }else{
            return redirect('/admin/center/edit');
        }
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
      // $bool = $request->session()->pull('id', $id);
        // $bool=$request->session()->forget('id');
        
       

    }
}
