<?php

use Illuminate\Database\Seeder;

class ContentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Schema::create('contents', function (Blueprint $table) {
          $table->increments('id');
          $table->enum('type', ['text', 'img', 'link', 'menu', 'footer']);
          $table->string('page');
          $table->string('placement');
          $table->text('content');
          $table->string('background-image')->nullable();
          $table->string('background-color')->nullable();
          $table->timestamps();
      });

      DB::table('content')->insert([
         'type' => 'menu',
         'page' => 'howitworks',
         'placement' => 's1h',
         'content' => 'texttexttexttext',
         'background-image' => 'url("../Motor.png")',
         'background-color' => '#202020'
     ]);
    }
}
