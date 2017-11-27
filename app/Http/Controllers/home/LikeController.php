<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Model\Type;
use App\Http\Model\info;
use App\Http\Model\comment;
use App\Http\Model\lists;
class LikeController extends Controller
{

    public function zan(Request $request)
    {
		$timestamps = false;
    	$zan = $request->except('_token');

		$cont = lists::where('id',$zan['lid'])->first();

 		$res = lists::where('id',$zan['lid'])->update(['zan'=>$cont->zan+1]);
	    if ($res) {
	        return  $cont->zan;
	    } else {
	        return 'alert("点赞失败,别点了!")';
	    }
    }
}
