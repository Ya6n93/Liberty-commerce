<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductHasCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_has_cart', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('product_Id_product')->unsigned();
            $table->integer('cart_Id_cart')->unsigned();
            $table->integer('cart_bill_Id_bill')->unsigned();
            $table->timestamps();
        });
    Schema::table('product_has_cart', function (Blueprint $table) {
            $table->foreign('product_Id_product')->references('id')->on('product');
            $table->foreign('cart_Id_cart')->references('id')->on('cart');
            $table->foreign('cart_bill_Id_bill')->references('id')->on('cart');
        });        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_has_cart');
    }
}
