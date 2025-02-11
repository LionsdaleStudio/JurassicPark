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
            $table->foreignId('created_by')->default(0);
            $table->foreignId('updated_by')->nullable();
            $table->foreignId('deleted_by')->nullable();
            /*ha tényleg rákötném a users táblára ez még kell ->constrained('users', 'id') */
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
