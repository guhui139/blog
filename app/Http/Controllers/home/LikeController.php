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
use Session;
class LikeController extends Controller
{

    public function zan(Request $request)
    {
    	$zan = $request->except('_token');
    	$zan['zan_time'] = date('Y-m-d H:m:s',time());

		$dz = zan::insert($zan);
		
		$cont = lists::where('id',$zan['list_id'])->first();

 		$res = lists::where('id',$zan['list_id'])->update(['zan'=>$cont->zan+1]);
	    if ($res and $dz) {
	        return  $cont->zan;
	    } else {
	        return '赞过了,别点了!';
	    }
    }

    public function review_zan(Request $request)
    {
    	$zan = $request->except('_token');
    	$zan['zan_time'] = date('Y-m-d H:m:s',time());
    	$review_id = $zan['review_id'];
    	$uid = $zan['uid'];
    	$info = zan::where(['review_id'=>$review_id,'uid'=>$uid])->first();
    	Session::put('wenzhang',$info);

    	if($info){
    		$info = zan::where('id',$info->id)->delete();
    		$cont = comment::where('id',$zan['review_id'])->first();
    		$res = comment::where('id',$zan['review_id'])->update(['review_zan'=>$cont->review_zan-1]);
    		$res2 = comment::where('id',$zan['review_id'])->first();
 			if ($res and $info) {
 				$shu = $res2->review_zan;
		        return  $data = [
	    			'info'=>1,
	    			'msg'=>$shu
	    		];
		    }
    	}else{
    		$dz = zan::insert($zan);
    		$cont = comment::where('id',$zan['review_id'])->first();
 			$res = comment::where('id',$zan['review_id'])->update(['review_zan'=>$cont->review_zan+1]);
 			$res2 = comment::where('id',$zan['review_id'])->first();
 			if ($res and $dz) {
 				$shu = $res2->review_zan;
		        return  $data = [
	    			'info'=>2,
	    			'msg'=>$shu
	    		];
		    }
    	}
		
		
		

	    
    }
}
