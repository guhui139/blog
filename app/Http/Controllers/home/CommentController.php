<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Model\Type;
use App\Http\Model\info;
use App\Http\Model\comment;
use App\Http\Model\lists;

class CommentController extends Controller
{
    public function add(Request $request)
    {
 		
 		$data = $request->except('_token');
		$data['time'] = date('Y-m-d H:i:s',time());
		$cont = count(comment::where('lid',$data['lid'])->get());
 		$res = comment::insertGetId($data);
	    if ($res) {
	        $data = comment::join('info', 'comment.uid', '=', 'info.user_id')
                        ->select('info.uname','info.img','comment.*')
                        ->where('comment.id',$res)
                        ->first();
            $data['cont'] = $cont;
	        return  $data;
	    } else {
	        return Redirect::back()->withInput()->withErrors('保存失败！');
	    }
    	
    }
}
