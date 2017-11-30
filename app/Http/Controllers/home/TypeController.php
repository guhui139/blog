<?php

namespace App\Http\Controllers\home;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Model\type;
use App\Http\Model\info;
use App\Http\Model\list_content;
use Session;
use App\Http\Model\lists;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = info::where('user_id',session('uid'))->first();

        return view('home.type',['user'=>$user]);
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
        $tp = type::where('id',$id)->first();
        $res = lists::where('type_id',$id)->get();
        $cont = lists::join('list_content','list_content.list_id','=','lists.id')
                        ->join('info','info.user_id','=','lists.info_id')
                        ->join('type','type.id','=','lists.type_id')
                        ->select('info.uname','info.img','lists.*','list_content.content','type.name','info.user_id')
                        ->orderBy('lists.zan','desc')
                        ->where('lists.type_id','=',$id)
                        ->get();
        // $cont = list_content::where('list_id',$id)->first();
        // var_dump($cont);
        $user = info::where('user_id',session('uid'))->first();

        return view('home.list',['tp'=>$tp,'res'=>$res,'cont'=>$cont,'user'=>$user]);
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
