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
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->integer("Capacity");
            $table->float("Salary");
            $table->tinyInteger("StartAge");
            $table->tinyInteger("EndAge");
            $table->time("StartTime");
            $table->time("EndTime");
            $table->string("image");
            $table->boolean("publish");
            $table->foreignId('Teacher_id')->constrained('teachers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subjects');
    }
};
