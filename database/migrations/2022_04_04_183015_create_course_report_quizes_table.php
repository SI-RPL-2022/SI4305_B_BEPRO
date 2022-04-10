<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseReportQuizesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_quizes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('course_module_quiz_id', false, true);
            $table->text('answer');
            $table->enum('status', ['true', 'false', 'not_corrected']);
            $table->timestamps();

            $table->foreign('course_module_quiz_id')->references('id')->on('course_module_quizes')->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('report_quizes');
    }
}
