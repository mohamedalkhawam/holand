<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services_pages', function (Blueprint $table) {
            $table->id();
            $table->string('title_en');
            $table->string('title_nl');
            $table->string('keywords_en', 1000);
            $table->string('keywords_nl', 1000);
            $table->string('description_en', 4000);
            $table->string('description_nl', 4000);
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
        Schema::dropIfExists('services_pages');
    }
}
