<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('desc');
            $table->string('path')->unique();
            $table->string('thumb')->unique();
            $table->dateTimeTz('created_at')->useCurrent();
            $table->dateTimeTz('update_at');
            $table->integer('seq');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('photo');
    }
}
