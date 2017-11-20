<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Model\lists;
use App\Http\Model\list_content;
// use DB;
class ListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/home.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $zu = $request->except('_token','content');
        

        // $res['info_id'] = session('user_id');
        
        $zu['time'] = date('Y-m-d H:i:s',time());
        $wen = $request->except('_token','time','title','type_id','cimg');
        $zu['abstract'] = substr($wen['content'],0,30).'...';
        // dd($zu);
         //文件上传
        if($request->hasFile('cimg')){

            //修改名字
            $name = rand(1111,9999).time();

            //获取后缀
            $suffix = $request->file('cimg')->getClientOriginalExtension();

            //移动图片
            $request->file('cimg')->move('./home/Upload',$name.'.'.$suffix);
        }
        $zu['cimg'] = '/home/Upload/'.$name.'.'.$suffix; 

        $data = lists::insertGetId($zu);

        $wen['list_id'] = $data;
        $res = list_content::insert($wen);
        if($data && $res){
            return redirect('/list');
        }else{
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
        return view('home.content');
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
}
