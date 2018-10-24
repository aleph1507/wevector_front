<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactEmail;
use Mail;
use Validator;

class ContactController extends Controller
{


    public function send(Request $request) {
      $validator = Validator::make($request->all(), [
        'g-recaptcha-response' => 'required|captcha'
      ]);
      //
      if ($validator->fails()) {
          if($request->ajax())
          {
              return response()->json(array(
                  'success' => false,
                  'message' => 'There are incorect values in the form!',
                  'errors' => $validator->getMessageBag()->toArray()
              ), 422);
          }

          $this->throwValidationException(
              $request, $validator
          );
      }

      Mail::to("hello@litra.com.mk")->send(new ContactEmail($request->all()));
    }
}
