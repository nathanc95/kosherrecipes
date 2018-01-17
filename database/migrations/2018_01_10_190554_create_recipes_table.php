<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('vegan');
            $table->string('cashrout');
            $table->string('difficulty');
            $table->string('holidays');
            $table->integer('cost');
            $table->text('time');
            $table->text('ingredients');
            $table->text('recipe');
            $table->string('country');
            $table->text('reply');
            $table->text('picture');
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
        Schema::dropIfExists('stocks');
    }
}
