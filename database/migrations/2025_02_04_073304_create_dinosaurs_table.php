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
        Schema::create('dinosaurs', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->double("length");
            $table->double("height");
            $table->double("weight");
            $table->string("color");
            $table->boolean("sex")->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dinosaurs');
    }
};
