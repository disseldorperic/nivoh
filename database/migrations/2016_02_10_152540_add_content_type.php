<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddContentType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contents', function (Blueprint $table) {
            $table->dropForeign('contents_news_id_foreign');
            $table->dropColumn('news_id');

            $table->dropForeign('contents_blog_id_foreign');
            $table->dropColumn('blog_id');

            $table->dropForeign('contents_page_id_foreign');

            $table->string('page_type')->default('Cms\\Page');
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
            $table->integer('news_id')->unsigned()->nullable();
            $table->foreign('news_id')->references('id')->on('news_items')->onDelete('cascade');

            $table->integer('blog_id')->unsigned()->nullable();
            $table->foreign('blog_id')->references('id')->on('blogs')->onDelete('cascade');

            $table->foreign('page_id')->references('id')->on('pages')->onDelete('cascade');
        });
    }
}
