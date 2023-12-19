<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use Illuminate\Http\Request;


class ContactController extends Controller
{
    //
    function show() {
        return view('contactUS');
    }

    function send(Request $request) {
        $data  = [
            'name'=> $request->name, 
            'subject'=> $request->subject,
            'message' => $request->message,
            'email' => $request->email
        ];
        

        Mail::to('Dalia@example.com')->send(new ContactMail($data));

        return 'email sent successfully';
    }
}
