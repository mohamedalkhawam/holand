<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description_en');
            $table->string('description_nl');
            $table->string('bio_en');
            $table->string('bio_nl');
            $table->string('education_en');
            $table->string('education_nl');
            $table->string('membership_en');
            $table->string('membership_nl');
            $table->string('languages');
            $table->foreignId('services_id')->constrained('Services_page')->onDelete('set null');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('google');
            $table->string('imagePath');
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
        Schema::dropIfExists('doctors');
    }
}
