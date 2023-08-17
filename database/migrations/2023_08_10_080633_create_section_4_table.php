<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSection4Table extends Migration
{
    public function up()
    {
        Schema::create('section_4', function (Blueprint $table) {
            $table->id();
            $table->string('Title');
            $table->text('Text');
            $table->string('email');
            $table->string('phone');
            $table->text('FrontDeskText')->nullable();
            $table->string('facebook_link')->nullable();
            $table->string('insta_link')->nullable();
            $table->string('twitter_link')->nullable();
            $table->string('linkedin_link')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('section_4');
    }
}
