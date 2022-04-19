<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $course = new \App\Models\Course();
        $course->course_name = 'Pembelajaran Laravel 8';
        $course->description = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit qui alias quos quis amet libero iusto harum! Distinctio aspernatur quia exercitationem quae aperiam vitae, atque in quos. Fuga, quae neque.';
        $course->thumbnail_image = 'course-default.jpg';
        $course->thumbnail_video = 'https://youtu.be/WEpKnd4tegI';
        $course->category_id = 1;
        $course->slug = 'pembelajaran-laravel-8';
        $course->user_id = 2;
        $course->created_at = now();
        $course->updated_at = now();
        $course->save();
        
        $course = new \App\Models\Course();
        $course->course_name = 'Pembelajaran VueJS';
        $course->description = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit qui alias quos quis amet libero iusto harum! Distinctio aspernatur quia exercitationem quae aperiam vitae, atque in quos. Fuga, quae neque.';
        $course->thumbnail_image = 'course-default.jpg';
        $course->thumbnail_video = 'https://youtu.be/L007GhpMR3U';
        $course->category_id = 2;
        $course->slug = 'pembelajaran-vuejs';
        $course->user_id = 2;
        $course->created_at = now();
        $course->updated_at = now();
        $course->save();
        
        $course = new \App\Models\Course();
        $course->course_name = 'Pembelajaran React Native';
        $course->description = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit qui alias quos quis amet libero iusto harum! Distinctio aspernatur quia exercitationem quae aperiam vitae, atque in quos. Fuga, quae neque.';
        $course->thumbnail_image = 'course-default.jpg';
        $course->thumbnail_video = 'https://youtu.be/iywaBOMvYLI';
        $course->category_id = 3;
        $course->slug = 'pembelajaran-react-native';
        $course->user_id = 2;
        $course->created_at = now();
        $course->updated_at = now();
        $course->save();
    }
}
