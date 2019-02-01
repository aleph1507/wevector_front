<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactEmail;
use Mail;
use Validator;
use App\Rules\Captcha;

class ContactController extends Controller
{


    public function send(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'address' => 'required',
//            'phone' => 'required',
            'company' => 'required',
            'city' => 'required',
            'country' => 'required',
            'c-form-message' => 'required',
            'g-recaptcha-response' => new Captcha()
        ]);
//        dd('ContactController -> send()');
//        dd($request->all());

//      $validator = Validator::make($request->all(), [
//          'g-recaptcha-response' => 'required|captcha'
//          'g-recaptcha-response' => ['required', new ValidRecaptcha]
//          'g-recaptcha-response' => 'required|captcha'
//          'recaptcha_response_field' => 'required|recaptcha',
//          'g-recaptcha-response' => 'required|recaptcha'
//          'g-recaptcha-response' => new Captcha()

//      ]);
      //
//      if ($validator->fails()) {
//          if($request->ajax())
//          {
//              return response()->json(array(
//                  'success' => false,
//                  'message' => 'There are incorect values in the form!',
//                  'errors' => $validator->getMessageBag()->toArray()
//              ), 422);
//          }
//
//          $this->throwValidationException(
//              $request, $validator
//          );
//      }

//        if(!$validator->fails()) Mail::to("hello@litra.com.mk")->send(new ContactEmail($request->all()));
//        dd($request->all());
      dd(Mail::to("hello@litra.com.mk")->send(new ContactEmail($request->all())));
    }
}
