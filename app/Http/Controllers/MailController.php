<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;

class MailController extends Controller
{

	public function mailData(Request $request)
	{


              $data = array(
                  'firstName'  =>  $request->firstName,
                  'lastName'  =>   $request->lastName,
                  'phone'   =>   $request->phone,
                  'email'   =>   $request->email,
                  'callers'   =>   $request->callers
              );



        Mail::to(['callersremote@gmail.com'])->queue(new ContactMail($data));
        return redirect()->back()->with('success', 'Thanks for contacting us!');


	}
}
