<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Model\link;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $res=link::where('link_name','like','%'.$request->input('search').'%')->paginate($request->input('num',5));;

        return view('admin.link.index',['res'=>$res,'request'=>$request,'search'=>$request->input('search')]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/link/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $res = $request->except('_token','_method');

          if($request->hasFile('image')){

            $res = $request->except('_token','repass','image','_method');
            $name = rand(1111,9999).time();
            $suffix = $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('./Uploads/',$name.'.'.$suffix);
        }

            $res['image']='Uploads/'.$name.'.'.$suffix;
              // dd($res);   
      
        $data = link::insert($res);
        
        if($data){
            return redirect('/admin/link');
        }else{
            return back();
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
         $res=link::where('id',$id)->first();
        return view('admin/link/edit',['res'=>$res]);

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

          if($request->hasFile('image')){

            $res = $request->except('_token','repass','image','_method');
            $name = rand(1111,9999).time();
            $suffix = $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('./Uploads/',$name.'.'.$suffix);
            $res['image']='Uploads/'.$name.'.'.$suffix;
        }

            
              // dd($res);   
      
        $data = link::where('id',$id)->update($res);
        
        if($data){
            return redirect('/admin/link');
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

         $res=link::where("id",'=',$id)->delete();
        if($res){
            return redirect()->route('admin.link.index');
        }else{
             return redirect()->route('admin.link.index');
        }
    }
}
