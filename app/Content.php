<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{

  protected $fillable = [
      'type', 'page', 'placement', 'content', 'background-color', 'background-image'
  ];

    public static function menus() {
      return self::where('type', 'menu');
    }

    public function texts() {
      return self::where('type', 'text');
    }

    public function imgs() {
      return self::where('type', 'img');
    }

    public function links() {
      return self::where('type', 'link');
    }

    public function footers() {
      return self::where('type', 'footer');
    }

    // App\Content::where('page', 'howitworks')//::where('placement', 's2');
}
