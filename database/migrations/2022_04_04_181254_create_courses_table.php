<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('course_name');
            $table->text('description');
            $table->string('thumbnail_image');
            $table->string('thumbnail_video');
            $table->integer('category_id', false, true);
            $table->string('slug')->unique();
            $table->integer('user_id');
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('course_categories')->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
