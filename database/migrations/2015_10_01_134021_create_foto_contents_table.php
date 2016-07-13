<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFotoContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foto_contents', function (Blueprint $table) {
            $table->increments('id');

            $table->string('title')->nullable();
            $table->string('caption')->nullable();

            $table->integer('foto_id')->unsigned()->nullable();
            $table->foreign('foto_id')->references('id')->on('fotos')->onDelete('cascade');

            $table->string('language', 2)->default('nl');

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
        Schema::drop('foto_contents');
    }
}
