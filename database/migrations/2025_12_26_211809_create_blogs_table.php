<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id(); // Blog ID
            $table->string('title'); // Blog Title
            $table->unsignedBigInteger('category_id')->nullable(); // Blog Category
            $table->string('image')->nullable(); // Blog Image
            $table->text('description')->nullable(); // Blog Description
            $table->string('tags')->nullable(); // Blog Tags
            $table->boolean('status')->default(1); // Blog Status (1=Active, 0=Inactive)
            $table->timestamps();

            // Optional foreign key if you have categories table
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
