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
            $table->string('address',300);
            $table->string('facebook');
            $table->string('twitter');
            $table->string('google');
            $table->string('youtube');
            $table->float('lat');
            $table->float('lng');
            $table->string('open_day_from');
            $table->string('open_day_to');
            $table->string('open_hour_from');
            $table->string('open_hour_to');
            $table->string('first_special_day');
            $table->string('first_special_open_hour_from');
            $table->string('first_special_open_hour_to');
            $table->string('second_special_day');
            $table->string('second_special_day_note');
            $table->string('youtube_video');
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
