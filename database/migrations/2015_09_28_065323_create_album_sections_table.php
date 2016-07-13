<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlbumSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('album_sections', function (Blueprint $table) {
            $table->increments('id');

            $table->string('title');
            $table->string('url');

            $table->string('identifier', 25)->nullable();

            $table->integer('width');
            $table->integer('height');

            $table->integer('thumbnail_width')->nullable();
            $table->integer('thumbnail_height')->nullable();

            $table->boolean('crop')->default(false);

            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();

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
        Schema::drop('album_sections');
    }
}
