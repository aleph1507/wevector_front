<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentLivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content_lives', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('type', ['text', 'img', 'link', 'menu', 'footer', 'toggleBtn']);
            $table->string('page');
            $table->string('placement');
            $table->text('content');
            $table->string('background-image')->nullable();
            $table->string('background-color')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('content_lives');
    }
}
