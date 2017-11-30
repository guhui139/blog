<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Model\Type;
use App\Http\Model\info;
use App\Http\Model\comment;
use App\Http\Model\lists;
use App\Http\Model\review;

class CommentController extends Controller
{
    public function add(Request $request)
    {
 		
 		$data = $request->except('_token');
		$data['time'] = date('Y-m-d H:i:s',time());
		$cont = count(comment::where('lid',$data['lid'])->get());

 		$res = comment::insertGetId($data);
	    if ($res) {

 			$comm = comment::where('id',$res)->first();
 			$review = lists::where('id',$comm->lid)->first();
 			$comment = lists::where('id',$comm->lid)->update(['review'=>$review->review+1]);

	        $data = comment::join('info', 'comment.uid', '=', 'info.user_id')
                        ->select('info.uname','info.img','comment.*','info.user_id')
                        ->where('comment.id',$res)
                        ->first();
            $data['cont'] = $cont;
	        return  $data;
	    } else {

	        return Redirect::back()->withInput()->withErrors('保存失败！');
	    }
    	
    }

    public function ping(Request $request)
    {
 		$data = $request->except('_token');
		$data['rtime'] = date('Y-m-d H:i:s',time());

 		$res = review::insertGetId($data);
	    if ($res) {

 			$comm = review::where('id',$res)->first();

	        $data = review::join('info', 'review.user_id', '=', 'info.user_id')
	        			->join('comment','review.comment_id','=','comment.id')
                        ->select('info.uname','info.img','review.*','info.user_id')
                        ->where('review.id',$res)
                        ->first();

            $coms = comment::where('id',$data->comment_id)->first();

           	$info = info::where('user_id',$coms->uid)->first();

           	$zu[0] = $data;
           	$zu[1] = $info;

	        return  $zu;
	    } else {

	        return Redirect::back()->withInput()->withErrors('保存失败！');
	    }
    	
    }
}
