<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Mail;

class ContactController extends Controller
{


	
    public function contactme(Request $request){
		
    	Mail::send('email',
	       array(
	           'name' => $GLOBALS['request']->get('name'),
	           'email' => $GLOBALS['request']->get('email'),
	           'mobile' => $GLOBALS['request']->get('number'),
	           'subject' => $GLOBALS['request']->get('subject'),
			   'user_message' => $GLOBALS['request']->get('message')
	       ), function($message) {
				$message->from($GLOBALS['request']->email);
				$message->to('sperrow13579@gmail.com', 'Admin')->subject($GLOBALS['request']->subject);
	   });

    	return back();


    }
}
