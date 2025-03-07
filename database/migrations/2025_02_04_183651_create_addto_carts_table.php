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
        Schema::create('addto_carts', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('product_id');
            $table->string('pound')->nullable();
            $table->string('flavor')->nullable();
            $table->string('des')->nullable();
            $table->string('img')->nullable();
            $table->string('location')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addto_carts');
    }
};
