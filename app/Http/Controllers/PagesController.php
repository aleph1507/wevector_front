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
      $content = Content::packages()->get();
      return view('admin.packages')->with(compact('content'));
    }

    public function contact() {
      $content = Content::contact()->get();
      return view('admin.contact')->with(compact('content'));
    }

    public function footer() {
      $content = Content::footer()->get();
      return view('admin.footer')->with(compact('content'));
    }
}
