<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Mail;
use Session;

class ContactController extends Controller
{


	
    public function contactme(Request $request){

    	// $this->validate($request, [
    	// 		'name'	 =>	'required|string|max:191',
    	// 		'email'	 => 'required|email',
    	// 		'mobile' => 'required|string',
    	// 		'subject' => 'required|string',
    	// 		'user_message' => 'required|string'
    	// ]); 

    	$data = [
    		'name'	 =>	$request->name,
			'email'	 => $request->email,
			'mobile' => $request->mobile,
			'subject' => $request->subject,
			'user_message' => $request->user_message
    	];
		
    	Mail::send('emails.contact', $data, function($message) use ($data) {
				$message->from($data['email']);
				$message->to('admin@logicsword.com');
				$message->subject($data['subject']);
	   });

    	Session::flash('Your message has sent successfully !!!');

    	return back();


    }
}
