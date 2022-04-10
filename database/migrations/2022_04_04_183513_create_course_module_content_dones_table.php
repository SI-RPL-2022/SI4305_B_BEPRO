<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseModuleContentDonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_module_content_dones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('enroll_id', false, true);
            $table->integer('course_module_id', false, true);
            $table->string('assigment');
            $table->timestamps();

            $table->foreign('enroll_id')->references('id')->on('enrolls')->cascadeOnUpdate()->cascadeOnDelete();
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
        Schema::dropIfExists('course_module_content_dones');
    }
}
