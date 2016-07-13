<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sections', function (Blueprint $table) {
            $table->increments('id');

            $table->string('title');
            $table->string('identifier', 25)->nullable();
            $table->string('prepend')->nullable();

            $table->boolean('user_edit')->default(false);
            $table->integer('default_template')->unsigned()->nullable();
            $table->foreign('default_template')->references('id')->on('templates')->onDelete('cascade');

            $table->string('language',2)->default('nl');
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();

            $table->timestamps();
        });

        Schema::table('pages', function (Blueprint $table) {
            $table->integer('section_id')->unsigned()->nullable();
            $table->foreign('section_id')->references('id')->on('sections')->onDelete('cascade');
        });

        Schema::table('menus', function (Blueprint $table) {
            $table->integer('section_id')->unsigned()->nullable();
            $table->foreign('section_id')->references('id')->on('sections')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('menus', function (Blueprint $table) {
            $table->dropForeign('menus_section_id_foreign');
            $table->dropColumn('section_id');
        });

        Schema::table('pages', function (Blueprint $table) {
            $table->dropForeign('pages_section_id_foreign');
            $table->dropColumn('section_id');
        });

        Schema::drop('sections');
    }
}
