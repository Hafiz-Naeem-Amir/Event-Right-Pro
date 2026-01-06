<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id(); // Category ID
            $table->string('name'); // Category Name
            $table->string('image')->nullable(); // Category Image
            $table->tinyInteger('status')->default(1); // Status: Active = 1, Inactive = 0
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
