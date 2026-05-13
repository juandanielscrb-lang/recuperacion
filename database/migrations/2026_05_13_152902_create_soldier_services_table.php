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
        Schema::create('soldier_services', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('soldier_id')->nullable();
            $table->unsignedBigInteger('service_id')->nullable();

            $table->foreign('soldier_id')
              ->references('id')
              ->on('soldiers')
              ->onDelete('set null');


            $table->foreign('service_id')
              ->references('id')
              ->on('services')
              ->onDelete('set null');            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soldier_services');
    }
};
