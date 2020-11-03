<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_pages', function (Blueprint $table) {

            $table->id()->autoIncrement();
            $table->string('title_en');
            $table->string('title_nl');
            $table->string('description_en', 500)->nullable();
            $table->string('description_nl', 500)->nullable();
            $table->string('imagePath')->nullable()->default('---');
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
        Schema::dropIfExists('home_pages');
    }
}
