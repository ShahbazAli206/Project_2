<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSection2Table extends Migration
{
    public function up()
    {
        Schema::create('section_2', function (Blueprint $table) {
            $table->id();
            $table->string('heading');
            $table->text('bodyText');
            $table->string('text_2')->nullable();
            $table->string('image');
            $table->string('sliderimage1')->nullable();
            $table->string('sliderimage2')->nullable();
            $table->string('sliderimage3')->nullable();
            $table->string('video_url')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('section_2');
    }
}
