<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function landing_page() {
      return view('admin.landing');
    }

    public function howitworks() {
      return view('admin.howitworks');
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
