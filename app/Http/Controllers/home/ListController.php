<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Model\lists;
use App\Http\Model\list_content;
use App\Http\Model\type;
use App\Http\Model\info;
use App\Http\Model\comment;
use App\Http\Model\zan;
use App\Http\Model\review;
use Session;
use DB;
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
        $res = Type::get();
        $user = info::where('user_id',session('uid'))->first();

        return view('/home.add',['res'=>$res,'user'=>$user]);
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
        
        $zu['time'] = date('Y-m-d H:i:s',time());
        $wen = $request->except('_token','time','title','type_id','cimg','abstract');
        // dd($zu);
         //文件上传
        if($request->hasFile('cimg')){

            //修改名字
            $name = rand(1111,9999).time();

            //获取后缀
            $suffix = $request->file('cimg')->getClientOriginalExtension();

            //移动图片
            $request->file('cimg')->move('./homes/Uploads',$name.'.'.$suffix);
        }
        $zu['cimg'] = '/homes/Uploads/'.$name.'.'.$suffix; 
        $zu['info_id'] = $request->session()->get('uid');
        $data = lists::insertGetId($zu);

        $wen['list_id'] = $data;
        $res = list_content::insert($wen);
        if($data && $res){
            return redirect('/');
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
    public function show(Request $request, $id)
    {
        $res = list_content::where('list_id',$id)->first();
        $ls = lists::where('id',$id)->first();
        $tp = type::where('id',$ls->type_id)->first();
        $user = info::where('user_id',$ls->info_id)->first();
        
        $cont = count(comment::where('lid',$id)->get());
        $request->session()->put('count',$cont);

        $com = comment::join('info', 'info.user_id', '=', 'comment.uid')
                        ->join('lists','comment.lid','=','lists.id')
                        ->select('info.uname','info.img','comment.*','info.user_id')
                        ->where('lid',$id)
                        ->get();

        $zan = zan::join('info', 'info.user_id', '=', 'zan.uid')
                        ->join('lists','zan.list_id','=','lists.id')
                        ->select('zan.*')
                        ->where('list_id',$id)
                        ->first();

        $review = review::join('info','info.user_id','=','review.user_id')
                        ->join('comment','comment.id','=','review.comment_id')
                        ->select('info.uname','info.img','review.*','info.user_id','comment.uid')
                        ->orderBy('id','desc')
                        ->get();

        $pres = list_content::where('list_id',$id-1)->first();
        $pls = lists::where(['id'=>$id-1,'type_id'=>$tp->id])->first();

        $nres = list_content::where('list_id',$id+1)->first();
        $nls = lists::where(['id'=>$id+1,'type_id'=>$tp->id])->first();
// dd($user);
        return view('home.content',['res'=>$res,'ls'=>$ls,'tp'=>$tp,'nres'=>$nres,'nls'=>$nls,'pres'=>$pres,'pls'=>$pls,'user'=>$user,'cont'=>$cont,'com'=>$com,'zan'=>$zan,'review'=>$review]);
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
