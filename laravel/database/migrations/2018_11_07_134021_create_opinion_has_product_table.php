<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpinionHasProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opinion_has_product', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('opinion_Id_opinion')->unsigned();
            $table->integer('product_Id_product')->unsigned();
            $table->integer('product_category_Id_category')->unsigned();
            $table->timestamps();
        });
        Schema::table('opinion_has_product', function (Blueprint $table) {
            $table->foreign('opinion_Id_opinion')->references('id')->on('opinion');
            $table->foreign('product_Id_product')->references('id')->on('product');
            $table->foreign('product_category_Id_category')->references('id')->on('product');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('opinion_has_product');
    }
}
