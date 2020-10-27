<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutGalleryScreensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_gallery_screens', function (Blueprint $table) {
            $table->id();
            $table->string('title_en');
            $table->string('title_nl');
            $table->string('first_paragraph_en', 2000);
            $table->string('first_paragraph_nl', 2000);
            $table->string('second_paragraph_en', 2000);
            $table->string('second_paragraph_nl', 2000);
            $table->string('first_sentence_en');
            $table->string('first_sentence_nl');
            $table->string('second_sentence_en');
            $table->string('second_sentence_nl');
            $table->string('first_image_path');
            $table->string('second_image_path');
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
        Schema::dropIfExists('about_gallery_screens');
    }
}
