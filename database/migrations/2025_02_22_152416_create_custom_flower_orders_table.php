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
        Schema::create('custom_flower_orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_id');
            $table->bigInteger('customer_id');
            $table->string('repper_id');

            $table->string('ip_address');
            $table->string('total_price');
            $table->string('total_quantity');
            $table->string('status')->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('custom_flower_orders');
    }
};
