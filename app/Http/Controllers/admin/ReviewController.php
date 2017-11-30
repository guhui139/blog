<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Model\comment;
use App\Http\Model\info;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $res = DB::table('comment')
        ->join('lists','comment.lid','=','lists.info_id')
        ->join('info','comment.uid','=','info.user_id')
        ->where('uname','like','%'.$request->input('search').'%')
        ->select('comment.id','info.uname','lists.title','comment.time','comment.content','comment.review_zan')
        ->orderby('id','asc')
        ->paginate($request->input('num',2));
        //dd($res);
        return view('admin.reviews.review',['res'=>$res,'request'=>$request,'search'=>$request->input('search')]);
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
        $res = DB::table('comment')->where('id',$id)->first();
        //dd($res);
        return view('admin.reviews.edit',['res'=>$res]);
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
        $data = DB::table('comment')->where('id',$id)->update($res);

        if($data){

            return redirect('/admin/review')->with('msg','修改成功');
        } else {

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
        //
        $res = DB::table('comment')->where('id',$id)->delete();
        if($res){
            return redirect('admin/review')->with('msg','删除成功');
        }
    }
}
