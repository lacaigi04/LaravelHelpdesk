<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('articles', function (Blueprint $table) {
        //     $table->increments('id');
        //     //tieu de: title
        //     $table->string('title');
        //     //noi dung: content
        //     $table->string('content');
        //     //hinh anh: image
        //     $table->string('image');
            
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
