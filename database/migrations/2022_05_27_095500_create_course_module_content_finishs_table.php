<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseModuleContentFinishsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_module_content_finsishs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('enroll_id', false, true);
            $table->integer('course_module_content_id', false, true);
            $table->string('assigment')->nullable();
            $table->enum('status', ['active', 'deactive']);
            $table->timestamps();

            $table->foreign('enroll_id')->references('id')->on('enrolls')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('course_module_content_id')->references('id')->on('course_module_contents')->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_module_content_finsishs');
    }
}
