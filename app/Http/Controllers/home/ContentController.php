<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Model\list_content;
use App\Http\Model\info;
use App\Http\Model\lists;
use App\Http\Model\comment;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        ///*文章的评论*/
        $res = comment::where('uid',session('uid'))
        ->join('lists','comment.lid','=','lists.id')
        ->join('info','comment.uid','=','info.user_id')
        ->select('info.uname','info.img','lists.*','lists.title','comment.content','comment.review_zan')
        ->paginate(3);
        //dd($res);
        //获取用户头像
        $ress = info::where('user_id',session('uid'))->first();
        //dd($ress);
        return view('home.user.review',['res'=>$res,'ress'=>$ress]);
        
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
        $res = $request->input();dd($res);
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
        $res = list_content::delete($id);
        if($res){
            return redirect('/home/user');
        }else{
            return back();
        }
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
        $data = $request->except('_token','_method');
        $data['time'] = date('Y-m-d H:i:s',time());
        $data['uid'] = session('uid');
        $data['lid'] = $id;

        $ress = lists::insert([
            'info_id'=>session('uid'),
            'time'=>date('Y-m-d H:i:s',time())
            ]);
        //dd($data);
        $res = comment::insert($data);
        if($res && $ress){
        
            return back()->withInput()->with('msg','评论成功');
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
}
