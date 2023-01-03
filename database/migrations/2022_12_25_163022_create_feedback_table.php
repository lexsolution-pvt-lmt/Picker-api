<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('feedbacks', function (Blueprint $table) {
            $table->increments('id');
            $table->text('message');

            $table->unsignedInteger('auction_id')->unique();
            $table->unsignedInteger('feedback_type_id');
            $table->unsignedInteger('left_by_user_id');
            
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('feedback');
    }
}
