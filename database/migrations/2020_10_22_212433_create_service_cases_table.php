<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceCasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_cases', function (Blueprint $table) {
            $table->id();
            $table->integer('services_id');
            $table->foreign('services_id')->references('id')->on('Services_page')->onDelete('cascade');
            $table->string('short_story_en', 1000);
            $table->string('short_story_nl', 1000);
            $table->string('initial_problem_en', 1000);
            $table->string('initial_problem_nl', 1000);
            $table->float('cost');
            $table->integer('doctor_id');
            $table->foreign('doctor_id')->references('id')->on('Doctors')->onDelete('set null');
            $table->string('imagePath_before');
            $table->string('imagePath_after');
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
        Schema::dropIfExists('service_cases');
    }
}
