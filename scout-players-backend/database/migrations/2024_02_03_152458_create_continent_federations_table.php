<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('continent_federations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('continent_id')->unsigned();
            $table->integer('world_federation_id')->unsigned();
            $table->string('name',100);

            $table->foreign('continent_id')->references('id')->on('continents');
            $table->foreign('world_federation_id')->references('id')->on('world_federations');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('continent_federations');
    }
};
