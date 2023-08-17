<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectioncardsTable extends Migration
{
    public function up()
    {
        Schema::create('sectioncards', function (Blueprint $table) {
            $table->id();
            $table->string('cardTitle');
            $table->text('cardText');
            $table->string('buttonText');
            $table->string('backgroundimage');
            $table->string('cardIcon')->nullable();
            $table->string('pdf')->nullable();
            $table->string('page')->nullable();
            $table->string('url')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sectioncards');
    }
}
