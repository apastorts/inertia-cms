<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->longText('content')->nullable();
            $table->integer('category_id')->nullable();
            $table->string('metadata')->nullable();
            $table->string('link');
            $table->boolean('menu')->default(false);
            $table->boolean('post')->default(false);
            $table->string('slug');
            $table->integer('created_by');
            $table->boolean('published')->default(false);
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
        Schema::dropIfExists('pages');
    }
}
