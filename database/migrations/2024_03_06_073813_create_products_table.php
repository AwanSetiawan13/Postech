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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('Product name');
            $table->integer('Qty');
            $table->integer('Seling Price');
            $table->integer('Buying Price');
            $table->bigInteger('Product Type id');
            $table->enum('Product status', ['active', 'inactive'])->default ('active');
            $table->rememberToken();
            $table->timestamps();
;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
