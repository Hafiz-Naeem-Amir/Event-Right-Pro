<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('user_id'); // Organizer
            $table->string('image')->nullable();
            $table->dateTime('start_time')->nullable();
            $table->dateTime('end_time')->nullable();
            $table->integer('people')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->string('tags')->nullable();
            $table->text('description')->nullable();
            $table->string('type')->default('offline'); // offline/online
            $table->string('address')->nullable();
            $table->string('lat')->nullable();
            $table->string('lang')->nullable();
            $table->string('url')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('events');


    }
};











