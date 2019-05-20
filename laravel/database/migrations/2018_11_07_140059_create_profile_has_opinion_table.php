<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileHasOpinionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_has_opinion', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('profile_Id_profile')->unsigned();
            $table->integer('profile_bill_Id_bill')->unsigned();
            $table->integer('opinion_Id_opinion')->unsigned();
            $table->timestamps();
        });
        Schema::table('profile_has_opinion', function (Blueprint $table) {
            $table->foreign('profile_Id_profile')->references('id')->on('profile');
            $table->foreign('profile_bill_Id_bill')->references('id')->on('profile');
            $table->foreign('opinion_Id_opinion')->references('id')->on('opinion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profile_has_opinion');
    }
}
