<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuickTipsTable extends Migration
{
    public function up()
    {
        Schema::create('quick_tips', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('text');
            $table->string('image');
            $table->string('icon');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('quick_tips');
    }
}
