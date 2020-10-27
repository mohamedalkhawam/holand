<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutHeadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about__headers', function (Blueprint $table) {
            $table->id();
            $table->string('title_en');
            $table->string('title_nl');
            $table->string('description_en');
            $table->string('description_nl');
            $table->string('paragraph_en', 2000);
            $table->string('paragraph_nl', 2000);
            $table->string('first_sentence_en');
            $table->string('first_sentence_nl');
            $table->string('second_sentence_en');
            $table->string('second_sentence_nl');
            $table->string('third_sentence_en');
            $table->string('third_sentence_nl');
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
        Schema::dropIfExists('about__headers');
    }
}
