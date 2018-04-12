<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->integer('good_count')->default(0);
            $table->integer('download_count')->default(0);
            $table->integer('play_count')->default(0);
            $table->integer('play_time')->default(0);
            $table->integer('meta_id')->default(0);
            $table->text('title')->nullable();
            $table->text('project_info')->nullable();
            $table->text('genre')->nullable();
            $table->text('album_image_path')->nullable();
            $table->text('sound_path')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
