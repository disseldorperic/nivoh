<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');

            $table->string('title', 100);
            $table->string('slug')->nullable();

            $table->date('date')->nullable();
            $table->tinyInteger('order')->nullable();

            $table->string('language', 2)->default('nl');
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();

            $table->unique(['slug', 'language']);

            $table->integer('section_id')->unsigned()->nullable();
            $table->foreign('section_id')->references('id')->on('sections')->onDelete('cascade');

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
        Schema::drop('items');
    }
}
