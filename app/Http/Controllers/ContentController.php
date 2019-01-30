<?php

namespace App\Http\Controllers;

use App\Content;
use Illuminate\Http\Request;
use File;

class ContentController extends Controller
{
    public $menus = ['howitworks', 'plans', 'contact', 'customers'];
    public $placement = '';

    public function store_menus($req){

      for($i = 0; $i<count($this->menus); $i++){
        for($j = $i+1; $j<count($this->menus); $j++){
          if(json_decode($req[$this->menus[$i]], true)['placement']  ==  json_decode($req[$this->menus[$j]], true)['placement']){
            abort(418, ucfirst($this->menus[$i]) . ' and ' . ucfirst($this->menus[$j]) .
              ' are both placed at position ' . json_decode($req[$this->menus[$j]], true)['placement']);
          }
        }
      }

      foreach($this->menus as $menu){
        Content::updateOrCreate(['page' => $menu], json_decode($req[$menu], true))->save();
      }
    }

    public function store_entry($r, $page){
      foreach($r as $entry){
        if($page == 'plans')
          $page = 'packages';
        if(empty(json_decode($entry, true)))
          continue;
        $arr = json_decode($entry, true);
        if(count($arr) < 2)
          continue;

        $this->placement = $arr['placement'];
        // $arr['content'] = str_replace()
        Content::updateOrCreate(['page' => $page, 'placement' => $arr['placement']], $arr)->save();
      }
    }

    public function content(Request $request) {
      $i_files = ['fi1', 's2i', 's3i', 's4i', 's5i', 's2ibg'];
      $check_files = false;
      switch($request->call){
        case 'set_menus':
          $this->store_menus($request->all());
          break;
        case 'landing':
        case 'howitworks':
        case 'plans':
        case 'contact':
        case 'footer':
          $check_files = true;
          $this->store_entry($request->all(), $request->call);
          break;
        default:
          abort(418, 'No such action');
      }

      if($check_files){
        $default_images = ['Motor.png','simple-iphone-x-mockup-for-dribbble.png','hand-pattern-01.png','layer-1.png',
                            'group-2.svg','group-4.svg','group-5.svg','group-6.svg',
                            'undraw-mail-cg-1-t.svg',
                            'we_vector_logo.svg', 'logo-pinterest.png', 'logo-linkedin.png', 'logo-facebook.png'];
        $files_path = 'img/' . $request->call . '/';
        if(!File::exists($files_path)) File::makeDirectory($files_path, 0777, true);
        foreach($i_files as $i){
          if($request->hasFile($i)) {
            $entry = Content::where('page', $request->call)->where('placement', $i)->first();
            if($entry == null){
              $entry = new Content;
              $entry->page = $request->call;
              $entry->type = "img";
              $entry->placement = $i;
            }
            if($entry != null){
              $file = $request->file($i);
              $extension = $file->getClientOriginalExtension();
              $filename = $i . time() . '.' . $extension;
              $file->move($files_path, $filename);
              if(File::exists($files_path . $entry->content) && !in_array($entry->content, $default_images))
                File::delete($files_path . $entry->content);
              $entry->content = $filename;
              $entry->save();
              $entry = null;
            }
            // } else {
            //   abort(418, 'No such entry');
            // }
          }
        }
      }
    }
}
