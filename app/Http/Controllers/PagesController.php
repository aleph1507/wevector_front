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

    public function publish() {
      $empty_live = \DB::select("DELETE FROM content_lives");
      $result = \DB::select("INSERT into content_lives SELECT * FROM contents");
      return json_encode($result);
    }

    public function preview($page = 'landing'){
      $preview = 1;
      switch($page){
        case 'howitworks':
          $content = Content::howitworks()->get();
          return view('admin.preview.howitworks')->with(compact('content', 'preview'));
          break;
        case 'plans':
          $content = Content::packages()->get();
          return view('admin.preview.plans')->with(compact('content', 'preview'));
          break;
        case 'contact':
          $content = Content::contact()->get();
          return view('admin.preview.contact')->with(compact('content', 'preview'));
          break;
        default:
          $content = Content::landing()->get();
          return view('admin.preview.welcome')->with(compact('content', 'preview'));
      }
    }
}
