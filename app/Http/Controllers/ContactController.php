<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactEmail;
use Mail;

class ContactController extends Controller
{
    public function send(Request $request) {

      Mail::to("info@thinkerlab.io")->send(new ContactEmail($request->all()));
    }
}
