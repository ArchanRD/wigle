<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id('pid');
            $table->string('p_name');
            $table->string('p_image');
            $table->integer('p_rating')->default(0);
            $table->integer('p_price');
            $table->string('p_category');
            $table->string('p_size');
            $table->integer('pincode');
            $table->boolean('featured');
            $table->integer('stock');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_products');
    }
};
