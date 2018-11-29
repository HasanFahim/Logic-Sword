<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Mail;

class ContactController extends Controller
{
    public contactme(Request $request){

    	Mail::send('email',
	       array(
	           'name' => $request->get('name'),
	           'email' => $request->get('email'),
	           'mobile' => $request->get('number'),
	           'subject' => $request->get('subject'),
	           'user_message' => $request->get('message')
	       ), function($message)
	   {
	       $message->from($request->email);
	       $message->to('sperrow13579@gmail.com', 'Admin')->subject($request->subject);
	   });

    	return back();


    }
}
