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
        Schema::create('detail__purchasings', function (Blueprint $table) {
            $table->id();
            $table->varcar('id Purchase');
            $table->varcar('Id Product');
            $table->string('Product Name');
            $table->integer('Purcashing Peice');
            $table->integer('Qty');
            $table->bigInteger('Sub data');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail__purchasings');
    }
};
