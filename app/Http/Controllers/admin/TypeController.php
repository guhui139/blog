<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Model\type;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $res=type::where('name','like','%'.$request->input('search').'%')->
            orderBy('id','asc')->
            paginate($request->input('num',2));
        return view('admin.type.index',['res'=>$res,'request'=>$request,'search'=>$request->input('search')]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.type.add');
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
        if($request->hasFile('img')){

            $res = $request->except('_token','repass','img');
            $name = rand(1111,9999).time();
            $suffix = $request->file('img')->getClientOriginalExtension();
            $request->file('img')->move('./Uploads/',$name.'.'.$suffix);
        }
            $res['img']='Uploads/'.$name.'.'.$suffix;
            // dd($res);


          $bool=type::insert($res);
          // dd($bool);
          if($bool){
            return redirect()->route('admin.type.index');
        }else{
             return redirect()->route('admin.type.exit');
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
        $res=type::where('id',$id)->first();
        
       
        return view('admin.type.edit',['res'=>$res]);
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
}
