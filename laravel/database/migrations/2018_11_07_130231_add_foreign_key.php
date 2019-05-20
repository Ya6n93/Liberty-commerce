<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreign('profile_Id_profile')->references('id')->on('profile');
        });
        Schema::table('roles', function (Blueprint $table) {
            $table->foreign('users_Id_users')->references('id')->on('users');
            $table->foreign('users_profile_Id_profile')->references('id')->on('users');
        });
        Schema::table('profile', function (Blueprint $table) {
            $table->foreign('bill_Id_bill')->references('id')->on('bill');
        });
        Schema::table('newsletter', function (Blueprint $table) {
            $table->foreign('product_Id_product')->references('id')->on('product');
            $table->foreign('product_category_Id_category')->references('id')->on('product');
        });
        Schema::table('product', function (Blueprint $table) {
            $table->foreign('category_Id_category')->references('id')->on('category');
        });
        Schema::table('cart', function (Blueprint $table) {
            $table->foreign('bill_Id_bill')->references('id')->on('bill');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('profile_Id_profile');
        });
        Schema::table('roles', function (Blueprint $table) {
            $table->dropForeign('users_Id_users');
            $table->dropForeign('users_profile_Id_profile');
        });
        Schema::table('profile', function (Blueprint $table) {
            $table->dropForeign('bill_Id_bill');
        });
        Schema::table('newsletter', function (Blueprint $table) {
            $table->dropForeign('product_Id_product');
            $table->dropForeign('product_category_Id_category');
        });
        Schema::table('product', function (Blueprint $table) {
            $table->dropForeign('category_Id_category');
        });
        Schema::table('cart', function (Blueprint $table) {
            $table->dropForeign('bill_Id_bill');
        });
    }
}
