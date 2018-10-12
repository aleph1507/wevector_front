<?php

namespace App\Http\Controllers;

use App\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public $menus = ['howitworks', 'plans', 'contact', 'customers'];

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

    public function content(Request $request) {
      switch($request->call){
        case 'set_menus':
          $this->store_menus(json_decode($request->payload, true));
          break;
        default:
          abort(418, 'No such action');
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
