<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::create('comments', function (Blueprint $table) {
    		$table->increments('id');
    		$table->integer('user_id')->unsigned()->index();
    		$table->integer('project_id')->unsigned()->index();
    		$table->text('contents')->nullable();
    		$table->timestamps();

    		$table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
    		$table->foreign('project_id')->references('id')->on('projects')->onUpdate('cascade')->onDelete('cascade');
    	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    	Schema::dropIfExists('comments');
    }
}
