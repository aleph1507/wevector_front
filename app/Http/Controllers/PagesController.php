<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;

class PagesController extends Controller
{
    public function landing_page() {
      $content = Content::landing()->get();
      return view('admin.landing')->with(compact('content'));
    }

    public function howitworks() {
      $content = Content::howitworks()->get();
      return view('admin.howitworks')->with(compact('content'));
    }

    public function packages() {
      return view('admin.packages');
    }

    public function contact() {
      return view('admin.contact');
    }

    public function footer() {
      return view('admin.footer');
    }
}
