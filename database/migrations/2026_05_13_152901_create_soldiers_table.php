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
        Schema::create('soldiers', function (Blueprint $table) {
            $table->id();

            $table->string('nombre');
            $table->string('apellido');
            $table->string('grado');
            $table->unsignedBigInteger('army_corp_id')->nullable();
            $table->unsignedBigInteger('quarter_id')->nullable();
            $table->unsignedBigInteger('company_id')->nullable();

            $table->foreign('army_corp_id')
              ->references('id')
              ->on('army_corps')
              ->onDelete('set null');

            $table->foreign('quarter_id')
              ->references('id')
              ->on('quarters') 
              ->onDelete('set null');

            $table->foreign('company_id')
              ->references('id')
              ->on('companies')
              ->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soldiers');
    }
};
