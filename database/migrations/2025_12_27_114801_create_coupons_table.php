<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('event_id')->nullable();
            $table->decimal('discount', 8, 2);
            $table->tinyInteger('discount_type')->default(0); // 0 = percentage, 1 = amount
            $table->integer('max_use')->default(1);
            $table->integer('max_use_per_user')->default(1);
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->decimal('minimum_amount', 10, 2)->nullable();
            $table->decimal('maximum_discount', 10, 2)->nullable();
            $table->text('description')->nullable();
            $table->tinyInteger('status')->default(1); // 1 = Active, 0 = Inactive
            $table->timestamps();

            $table->foreign('event_id')->references('id')->on('events')->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('coupons');
    }
};
