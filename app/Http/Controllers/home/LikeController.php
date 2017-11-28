<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Model\Type;
use App\Http\Model\info;
use App\Http\Model\comment;
use App\Http\Model\lists;
use App\Http\Model\zan;
class LikeController extends Controller
{

    public function zan(Request $request)
    {
    	$zan = $request->except('_token');
    	$zan['zan_time'] = date('Y-m-d',time());

		$dz = zan::insert($zan);
		
		$cont = lists::where('id',$zan['list_id'])->first();

 		$res = lists::where('id',$zan['list_id'])->update(['zan'=>$cont->zan+1]);
	    if ($res and $dz) {
	        return  $cont->zan;
	    } else {
	        return '赞过了,别点了!';
	    }
    }
}
