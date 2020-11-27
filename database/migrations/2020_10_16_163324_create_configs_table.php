<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configs', function (Blueprint $table) {
            $table->id();
            $table->string('phone');
            $table->string('email');
            $table->string('address_en',300);
            $table->string('address_nl',300);
            $table->string('facebook');
            $table->string('twitter');
            $table->string('google');
            $table->string('youtube');
            $table->string('map_src',1000);
            $table->string('address_link',1000);
            $table->string('open_day_from_en');
            $table->string('open_day_to_en');
            $table->string('open_day_from_nl');
            $table->string('open_day_to_nl');
            $table->string('open_hour_from');
            $table->string('open_hour_to');
            $table->string('first_special_day_en');
            $table->string('first_special_day_nl');
            $table->string('first_special_from');
            $table->string('first_special_to');
            $table->string('second_special_day_en');
            $table->string('second_special_day_nl');
            $table->string('second_special_day_note_en');
            $table->string('second_special_day_note_nl');
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
        Schema::dropIfExists('configs');
    }
}
