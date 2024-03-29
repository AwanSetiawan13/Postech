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
        Schema::create('detail__sellings', function (Blueprint $table) {
            $table->id();
            $table->varcar('id Sell');
            $table->varcar('id Product');
            $table->string('Product Name');
            $table->string('Selling Price');
            $table->integer('Qty');
            $table->Integer('Sub Total');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail__sellings');
    }
};
