<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Model\info;
use App\Http\Model\user;
use App\Http\Model\lists;
use App\Http\Model\comment;
use App\Http\Model\list_content;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Flc\Dysms\Client;
use Flc\Dysms\Request\SendSms;
use Session;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //多表联查,发表文章遍历

        $res = lists::join('info','lists.info_id','=','info.user_id')
                    ->join('comment','lists.id','=','comment.lid')
                    ->select('info.uname','info.img','lists.*','comment.review_zan')
                    ->where('info_id',Session::get('uid'))
                    ->paginate(3);
        //dd($res);
        //获取用户头像
       
        $ress = info::where('user_id',session('uid'))->first();
        //dd($ress);
        
        return view('home.user.mainpage',['res'=>$res,'ress'=>$ress]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $res = info::where('user_id',session('uid'))->first();
        return view('home.user.info',['res'=>$res]);
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

        $res = $request->except('_token','img');

        //文件上传
        if($request->hasFile('img')){

            //修改名字
            $name = rand(1111,9999).time();

            //获取后缀
            $suffix = $request->file('img')->getClientOriginalExtension();

            //移动图片
            $request->file('img')->move('./Uploads',$name.'.'.$suffix);

            $res['img'] = '/Uploads/'.$name.'.'.$suffix;
            
        }
        
        
        $res['user_id'] = session('uid');
        
        //dd($res);
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
        //文章详情页
        $res = lists::where('list_content.list_id',$id)
        ->join('list_content','lists.id','=','list_content.list_id')
        ->join('comment','lists.id','=','comment.lid')
        ->join('info','lists.info_id','=','info.user_id')
        ->select('info.uname','info.img','lists.*','comment.review_zan','list_content.content')
        ->first();
        
        //dd($res);
        //获取用户头像
        $ress = info::where('user_id',session('uid'))->first();
        $ls = lists::where('id',$id)->first();
        //获取评论条数
        $num = comment::where('comment.lid',$id)
        ->join('list_content','comment.lid','=','list_content.list_id')
        ->count();

        //获取评论内容
        $data = comment::where('comment.lid',$id)
        ->join('info','comment.uid','=','info.user_id')
        ->select('comment.time','comment.content','info.uname')
        ->get();
        //dd($data);

        return view('home.user.list',['res'=>$res,'ress'=>$ress,'num'=>$num,'data'=>$data,'ls'=>$ls]);
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
        $res = user::delete($id);
        if($res){
            return redirect('/index');
        }
    }


    public function account()
    {

        $res = user::where('id',session('uid'))->first();
        //dd($res);
        return view('home.user.account',['res'=>$res]);
    }

  
}
