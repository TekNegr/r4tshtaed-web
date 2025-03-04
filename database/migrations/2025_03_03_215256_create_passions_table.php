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
        Schema::create('passions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description_fr')->nullable();
            $table->text('description_en')->nullable();
            $table->date('date_obtained')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('passions');
    }
};
