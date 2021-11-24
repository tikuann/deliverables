<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryRecipeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
   {
       Schema::create('category_recipe', function (Blueprint $table) {
 
           $table->bigInteger('recipe_id')->unsigned();    //students,subjectsテーブルのidが
           $table->bigInteger('category_id')->unsigned();    //bigIncrementであった場合はbigIntegerにする
           $table->primary(['recipe_id', 'category_id']);  
       });
   }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipe_category');
    }
}