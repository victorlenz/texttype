<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
           /* $table->text('post');
            $table->integer('user_id',false,true);
            $table->foreign('user_id')->references('id')->on('user');
            $table->integer('contest_id',false,true)->nullable();
            $table->enum('share_with',array('contest','followers','fans','audience'))->default('followers');*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
