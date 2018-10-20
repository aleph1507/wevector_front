<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContentLive extends Model
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

  public function getContent(){
    return self::content;
  }

  public function scopeHowitworks($query){
    return $query->where('page', 'howitworks');
  }

  public function scopeLanding($query){
    return $query->where('page', 'landing');
  }

  public function scopePackages($query){
    return $query->where('page', 'packages');
  }

  public function scopeContact($query){
    return $query->where('page', 'contact');
  }

  public function scopeMenu($query){
    return $query->where('type', 'menu');
  }

  public function scopeFooter($query){
    return $query->where('page', 'footer');
  }
}
