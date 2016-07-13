<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->increments('id');

            $table->string('title');
            $table->string('slug')->nullable();
            $table->date('date');
            $table->string('author');

            $table->string('language',2)->default('nl');
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();

            $table->timestamps();
        });

        Schema::create('tags', function (Blueprint $table) {
            $table->increments('id');

            $table->string('tag');
            $table->string('slug')->nullable();

            $table->timestamps();
        });

        Schema::create('blog_tag', function (Blueprint $table) {
            $table->integer('blog_id')->unsigned()->index();
            $table->foreign('blog_id')->references('id')->on('blogs')->onDelete('cascade');

            $table->integer('tag_id')->unsigned()->index();
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');

            $table->timestamps();
        });

        Schema::table('contents', function (Blueprint $table) {
            $table->integer('blog_id')->unsigned()->nullable();
            $table->foreign('blog_id')->references('id')->on('blogs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contents', function (Blueprint $table) {
            $table->dropForeign('contents_blog_id_foreign');
            $table->dropColumn('blog_id');
        });

        Schema::drop('blog_tag');
        Schema::drop('tags');
        Schema::drop('blogs');
    }
}
