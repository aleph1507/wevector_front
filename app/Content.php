<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    public function menu() {
      return self::where('type', 'menu');
    }

    public function text() {
      return self::where('type', 'text');
    }

    public function img() {
      return self::where('type', 'img');
    }

    public function link() {
      return self::where('type', 'link');
    }

    public function footer() {
      return self::where('type', 'footer');
    }

    // App\Content::where('page', 'howitworks')//::where('placement', 's2');
}
