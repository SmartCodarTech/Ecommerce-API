<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFarmerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farmer', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->string('lastname', 60);
            $table->string('firstname', 60);
            $table->string('address', 120);
            $table->string('country', 120);
            $table->string('city', 120);
            $table->string('phone', 120);
            $table->string('email', 120);
            $table->string('location', 60);
            $table->char('zip', 10);
            $table->integer('age')->unsigned();
            $table->string('gender');
            $table->string('picture', 60);
             $table->foreign('user_id')->references('id')->on('users');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('farmer');
    }
}
