<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('image')->nullable();
            $table->string('slug');
            $table->string('description')->nullable();
            $table->unique('slug');

            schema::create('auction_categories', function (Blueprint $table) {
                
                $table->integer('auction_id')->unsigned();
                $table->integer('category_id')->unsigned();

                $table->timestamps();
                
            });
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
        Schema::dropIfExists('categories');
        schema::dropIfExists('auction_categories'); 

    }
}
