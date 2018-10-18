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
        Content::updateOrCreate(['page' => $page, 'placement' => $arr['placement']], $arr)->save();
      }
    }

    public function content(Request $request) {
      $i_files = ['fi1', 's2i', 's3i', 's4i', 's5i'];
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
        $files_path = 'img/' . $request->call . '/';
        foreach($i_files as $i){
          if($request->hasFile($i)) {
            $entry = Content::where('page', $request->call)->where('placement', $i)->first();
            if($entry != null){
              $file = $request->file($i);
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
