<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMetaTranslations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meta_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('meta_id')->unsigned();
            $table->string('locale')->index();
            $table->string('title');
            $table->mediumText('description');
            $table->string('url');
            $table->unique(['meta_id', 'locale']);
            $table->foreign('meta_id')->references('id')->on('metas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meta_translations');
    }
}
