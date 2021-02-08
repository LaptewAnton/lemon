<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipesTable extends Migration
{
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->text('ingridients');
            $table->string('difficulty');
            $table->string('time');
            $table->integer('healthy_check');
            $table->integer('user_id');
            $table->integer('category_id');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('recipes');
    }
}
