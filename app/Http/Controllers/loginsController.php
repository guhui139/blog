<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Flc\Dysms\Client;
use Flc\Dysms\Request\SendSms;
use App\Http\model\user;

class loginsController extends Controller
{
    //
    public function index()
    {
    	$res = user::all();
    	dd($res);
    	// return view('admin.login');
    }

    public function add(Request $request)
    {
    	$config = [
		    'accessKeyId'    => 'LTAISReGL9dIY0UW',
		    'accessKeySecret' => 'ty1CynA7Oge1CybjlvZl31LGiw5WqE',
		];

		$client  = new Client($config);
		$sendSms = new SendSms;
		$res = $request->all();
		$sendSms->setPhoneNumbers($res['code']);
		$sendSms->setSignName('博客192');
		$sendSms->setTemplateCode('SMS_111170017');
		$sendSms->setTemplateParam(['code' => rand(100000, 999999)]);
		$sendSms->setOutId('demo');

		print_r($client->execute($sendSms));
                
        // var_dump($resp);
    }
}
