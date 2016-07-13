<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');

            $table->string('url');

            $table->string('identifier', 25)->nullable();
            $table->string('title', 100);
            $table->string('description', 155)->nullable();
            $table->string('breadcrumb');

            $table->string('language', 2)->default('nl');
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();

            $table->unique(['url', 'language']);

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
        Schema::drop('pages');
    }
}
