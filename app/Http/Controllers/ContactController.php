<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactEmail;
use Mail;

class ContactController extends Controller
{
    public function send() {
      $objForm = new \stdClass();
      $objForm->email = "e@mail.com";
      $objForm->name = "client";
      $objForm->sender = "sender";
      $objForm->receiver = "receiver";

      Mail::to("info@thinkerlab.io")->send(new ContactEmail($objForm));
    }
}
