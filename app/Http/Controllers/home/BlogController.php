<?php

namespace App\Http\Controllers\home;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Model\Type;
use App\Http\Model\info;
use App\Http\Model\list_content;
use App\Http\Model\lists;
use Session;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $type = Type::get();
        $request->session()->put('type',$type);
        $user = info::where('user_id',session('uid'))->first();
        Session::put('info',$user);
        $cont = lists::join('list_content','list_content.list_id','=','lists.id')
                        ->join('info','info.user_id','=','lists.info_id')
                        ->join('type','type.id','=','lists.type_id')
                        ->select('info.uname','info.img','lists.*','list_content.content','type.name')
                        ->orderBy('lists.zan','desc')
                        ->get();
        return view('home.index', ['type' => $type,'user'=> $user,'cont'=>$cont]);
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

    public function doLogout(Request $request)
    {
        Session::pull('uid',session('uid'));
        $type = $request->session()->get('type');
        $cont = lists::join('list_content','list_content.list_id','=','lists.id')
                        ->join('info','info.user_id','=','lists.info_id')
                        ->join('type','type.id','=','lists.type_id')
                        ->select('info.uname','info.img','lists.*','list_content.content','type.name')
                        ->orderBy('lists.zan','desc')
                        ->get();
        return view('home.index',['type'=>$type,'cont'=>$cont]);
    }
}
