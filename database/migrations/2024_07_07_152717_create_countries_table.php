<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('common', 50);
            $table->string('official', 75);
            $table->char('cca2', 2);
            $table->char('ccn3', 3);
            $table->char('cca3', 3);
            $table->string('flag', 150);
            $table->unsignedTinyInteger('subregion_id');
            $table->foreignIdFor(\App\Models\Currency::class)->constrained();

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('subregion_id')->references('id')->on('subregions');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('countries');
    }
};
