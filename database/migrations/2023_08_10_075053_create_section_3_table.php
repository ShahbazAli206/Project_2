<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSection3Table extends Migration
{
    public function up()
    {
        Schema::create('section_3', function (Blueprint $table) {
            $table->id();
            $table->string('heading');
            $table->text('bodyText');
            $table->string('buttonText');
            $table->string('image'); // Assuming you'll store the image path
            $table->string('pdf');   // Assuming you'll store the PDF path
            $table->string('page');  // Assuming you'll store the page URL
            $table->string('url');   // General URL field
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('section_3');
    }
}
