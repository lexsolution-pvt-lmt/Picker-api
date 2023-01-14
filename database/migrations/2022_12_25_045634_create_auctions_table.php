<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuctionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auctions', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('title');
            $table->text('description');
            $table->string('image');
            $table->string('starting_price');
            $table->string('reserve_price');
            $table->string('buy_now_price');
            $table->string('end_date');
            $table->string('end_time');
            $table->string('status');
            $table->string('user_id');
            $table->string('category-_id');
            
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
        Schema::dropIfExists('auctions');
    }
}
