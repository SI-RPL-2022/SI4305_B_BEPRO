<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CourseModuleQuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cModuleQuiz = new \App\Models\CourseModuleQuiz();
        $cModuleQuiz->course_module_id = 2;
        $cModuleQuiz->question = 'Apa itu laravel ?';
        $cModuleQuiz->discussion_result = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab nobis officia necessitatibus porro voluptatem, officiis sapiente fuga rerum laboriosam quo iste est nisi aliquam debitis totam doloremque eos numquam dolores.';
        $cModuleQuiz->score = 40;
        $cModuleQuiz->created_at = now();
        $cModuleQuiz->updated_at = now();
        $cModuleQuiz->save();
        
        $cModuleQuiz = new \App\Models\CourseModuleQuiz();
        $cModuleQuiz->course_module_id = 2;
        $cModuleQuiz->question = 'Bagaimana Laravel Bekerja ?';
        $cModuleQuiz->discussion_result = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab nobis officia necessitatibus porro voluptatem, officiis sapiente fuga rerum laboriosam quo iste est nisi aliquam debitis totam doloremque eos numquam dolores.';
        $cModuleQuiz->score = 30;
        $cModuleQuiz->created_at = now();
        $cModuleQuiz->updated_at = now();
        $cModuleQuiz->save();
        
        $cModuleQuiz = new \App\Models\CourseModuleQuiz();
        $cModuleQuiz->course_module_id = 2;
        $cModuleQuiz->question = 'Perintah Apa yang dilakukan untuk Instalasi Laravel ?';
        $cModuleQuiz->discussion_result = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab nobis officia necessitatibus porro voluptatem, officiis sapiente fuga rerum laboriosam quo iste est nisi aliquam debitis totam doloremque eos numquam dolores.';
        $cModuleQuiz->score = 30;
        $cModuleQuiz->created_at = now();
        $cModuleQuiz->updated_at = now();
        $cModuleQuiz->save();
    }
}
