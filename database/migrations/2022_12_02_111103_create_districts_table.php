<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('districts', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // tuman nomi
            $table->string('name_ru')->nullable(); // tuman nomi rus tilida
            $table->string('name_en')->nullable(); // tuman nomi ingliz tilida
            $table->unsignedBigInteger('region_id');
            $table->foreign('region_id')->references('id')->on('regions'); // regions jadvalining id ustunini ko'rsatadi
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
        Schema::dropIfExists('districts');
    }
};
