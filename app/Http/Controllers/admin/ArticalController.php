<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Model\list_content;
use App\Http\Model\lists;
use App\Http\Model\type;
use App\Http\Model\info;
use DB;


class ArticalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $res=DB::select('select lists.id,lists.abstract,lists.zan,lists.title,type.name,lists.time 
            from lists,type where type.id=lists.type_id order by zan desc');
       // $res=DB::table('lists','type')->where('lists.type_id','type.id')->paginate(3);
            ($res);
        return view('admin.artical.index',['res'=>$res]);
    
    
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.artical.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /*$res=DB::select("select * from lists where id={$id}");
        // dd($res);
        $res1=DB::select("select * from list_content where list_id={$id}");
        $res2=DB::select("select * from type where id={$res['type_id']}");
        $res3=DB::select("select * from info where id={$res['info_id']}");*/
        $res=lists::where('id',$id)->first();
            // dd($res);
        $res1=list_content::where('list_id',$id)->first();
        // dd($res['info_id']);
        $res2=type::where('id',$res['type_id'])->first();
        $res3=info::where('id',$res['info_id'])->first();
       $title=$res['title'];
        $content=$res1['content'];
        // dd($content);
         $type=$res2['name'];
        $uname=$res3['uname'];
        // dd($res3);
            /* $res1=DB::select("select info.uname,type.name from info,type where 
                info.user_id={$v['info_id']},type.id={$v['type_id']}");
            */
   // dd($res['title']);
        return view('admin.artical.show',['res'=>$res,'title'=>$title,'content'=>$content, 'type'=> $type,'uname'=>$uname]);
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

        $res=lists::where('id',$id)->delete();
       
        $res1=list_content::where('list_id',$id)->delete();
        $res2=type::where('id',$res['type_id'])->delete();
        $res3=info::where("id",$res['info_id'])->delete();

        if($res && $res1 && $res2 && $res3){
            return redirect()->route('admin.artical.index');
        }else{
            return redirect()->route('admin.artical.index');
        }
    }
}
