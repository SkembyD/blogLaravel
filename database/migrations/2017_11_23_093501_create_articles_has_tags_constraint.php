<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesHasTagsConstraint extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('articles_has_tags', function (Blueprint $table) {
          $table->foreign('tags_id')->references('idtags')->on('tags')->unique();
          $table->foreign('articles_id')->references('idarticles')->on('articles')->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('articles_has_tags', function (Blueprint $table) {
          $table->dropForeign(['tags_id']);
          $table->dropForeign(['articles_id']);
        });
    }
}
