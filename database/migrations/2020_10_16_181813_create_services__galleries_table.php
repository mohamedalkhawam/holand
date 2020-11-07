<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services__galleries', function (Blueprint $table) {
            $table->id();
            // $table->integer('services_id');
            $table->foreignId('services_id')->constrained('Services_page')->onDelete('cascade');
            // $table->foreign('services_id')->references('id')->on('Services_page')->onDelete('cascade');
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
        Schema::dropIfExists('services__galleries');
    }
}
