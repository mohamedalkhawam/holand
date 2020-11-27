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
            $table->string('description_en',2000)->nullable()->default('');
            $table->string('description_nl',2000)->nullable()->default('');
            $table->string('bio_en',2000)->nullable()->default('');
            $table->string('bio_nl',2000)->nullable()->default('');
            $table->string('education_en')->nullable()->default('');
            $table->string('education_nl')->nullable()->default('');
            $table->string('membership_en')->nullable()->default('');
            $table->string('membership_nl')->nullable()->default('');
            $table->string('languages')->nullable()->default('');
            $table->foreignId('services_id')->constrained('Services_page')->onDelete('set null');
            $table->string('facebook')->nullable()->default('');
            $table->string('instagram')->nullable()->default('');
            $table->string('imagePath')->nullable()->default('');
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
