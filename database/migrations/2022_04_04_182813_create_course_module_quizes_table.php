<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseModuleQuizesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_module_quizes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('course_module_id', false, true);
            $table->string('question');
            $table->text('discussion_result');
            $table->integer('score');
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
        Schema::dropIfExists('course_quizes');
    }
}
