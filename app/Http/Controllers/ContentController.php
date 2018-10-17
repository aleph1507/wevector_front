<?php

namespace App\Http\Controllers;

use App\Content;
use Illuminate\Http\Request;
use File;

class ContentController extends Controller
{
    public $menus = ['howitworks', 'plans', 'contact', 'customers'];
    public $placement = '';

    public function store_menus($r){
      for($i = 0; $i<count($this->menus); $i++){
        for($j = $i+1; $j<count($this->menus); $j++){
          if($r[$this->menus[$i]]['placement']  ==  $r[$this->menus[$j]]['placement']){
            abort(418, ucfirst($this->menus[$i]) . ' and ' . ucfirst($this->menus[$j]) .
              ' are both placed at position ' . $r[$this->menus[$j]]['placement']);
          }
        }
      }

      foreach($this->menus as $menu){
        Content::updateOrCreate(['page' => $menu], $r[$menu])->save();
      }
    }

    public function store_entry($r, $page){
      foreach($r as $entry){
        if(empty(json_decode($entry, true)))
          continue;
        $arr = json_decode($entry, true);
        if(count($arr) < 2)
          continue;

        $this->placement = $arr['placement'];
        Content::updateOrCreate(['page' => $page, 'placement' => $arr['placement']], $arr)->save();
      }
    }

    public function content(Request $request) {
      $i_files = ['fi1', 's2i', 's3i', 's4i', 's5i'];
      $check_files = false;
      switch($request->call){
        case 'set_menus':
          $this->store_menus(json_decode($request->all(), true));
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
        // $i_files = ['fi1', 's2i', 's3i', 's4i', 's5i'];
        $files_path = 'img/' . $request->call . '/';
        foreach($i_files as $i){
          if($request->hasFile($i)) {
            $entry = Content::where('page', $request->call)->where('placement', $i)->first();
            // $entry = Content::where(['page', '=', $request->call], ['placement', '=', $i])->first();
            if($entry != null){
              $file = $request->file($i);
              // echo '   i:  ';
              // print_r($i);
              // echo '  ENTRY: ';
              // print_r($entry);
              // echo '  FILE:  ';
              // print_r($file);
              $extension = $file->getClientOriginalExtension();
              $filename = $i . time() . '.' . $extension;
              $file->move($files_path, $filename);
              File::delete($files_path . $entry->content);
              $entry->content = $filename;
              $entry->save();
              $entry = null;
            } else {
              abort(418, 'No such entry');
            }
          }
        }
      }

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\content  $content
     * @return \Illuminate\Http\Response
     */
    public function show(content $content)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\content  $content
     * @return \Illuminate\Http\Response
     */
    public function edit(content $content)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\content  $content
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, content $content)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\content  $content
     * @return \Illuminate\Http\Response
     */
    public function destroy(content $content)
    {
        //
    }
}
