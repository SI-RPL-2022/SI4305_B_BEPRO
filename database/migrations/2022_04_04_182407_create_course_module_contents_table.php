<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseModuleContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_module_contents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('course_module_id', false, true);
            $table->string('title_module_content');
            $table->string('slug');
            $table->text('video_link');
            $table->text('pdf_file');
            $table->text('description');
            $table->integer('ordinal');
            $table->timestamps();

            $table->foreign('course_module_id')->references('id')->on('course_modules')->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_module_contents');
    }
}
