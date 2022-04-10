<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CourseModuleContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cModuleContent = new \App\Models\CourseModuleContent();
        $cModuleContent->course_module_id = 1;
        $cModuleContent->title_module_content = 'Pengenalan Laravel 8';
        $cModuleContent->slug = 'pengenalan-laravel-8';
        $cModuleContent->video_link = 'https://youtu.be/rK_d5g3pBb8';
        $cModuleContent->pdf_file = 'default.pdf';
        $cModuleContent->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores unde ipsam neque doloremque laboriosam dolorem magni rerum quia sunt, cumque eos, laborum consequatur saepe, sed aperiam velit blanditiis in architecto.';
        $cModuleContent->ordinal = 1;
        $cModuleContent->created_at = now();
        $cModuleContent->updated_at = now();
        $cModuleContent->save();
        
        $cModuleContent = new \App\Models\CourseModuleContent();
        $cModuleContent->course_module_id = 2;
        $cModuleContent->title_module_content = 'Instalasi-Composer';
        $cModuleContent->slug = 'instalasi-composer';
        $cModuleContent->video_link = 'https://youtu.be/BxF7pfW7sqI';
        $cModuleContent->pdf_file = 'default.pdf';
        $cModuleContent->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores unde ipsam neque doloremque laboriosam dolorem magni rerum quia sunt, cumque eos, laborum consequatur saepe, sed aperiam velit blanditiis in architecto.';
        $cModuleContent->ordinal = 1;
        $cModuleContent->created_at = now();
        $cModuleContent->updated_at = now();
        $cModuleContent->save();
        
        $cModuleContent = new \App\Models\CourseModuleContent();
        $cModuleContent->course_module_id = 2;
        $cModuleContent->title_module_content = 'Instalasi NPM';
        $cModuleContent->slug = 'instalasi-npm';
        $cModuleContent->video_link = 'https://youtu.be/M0TplIeZoYg';
        $cModuleContent->pdf_file = 'default.pdf';
        $cModuleContent->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores unde ipsam neque doloremque laboriosam dolorem magni rerum quia sunt, cumque eos, laborum consequatur saepe, sed aperiam velit blanditiis in architecto.';
        $cModuleContent->ordinal = 2;
        $cModuleContent->created_at = now();
        $cModuleContent->updated_at = now();
        $cModuleContent->save();
        
        $cModuleContent = new \App\Models\CourseModuleContent();
        $cModuleContent->course_module_id = 3;
        $cModuleContent->title_module_content = 'Pengenalan VueJS';
        $cModuleContent->slug = 'pengenalan-vuejs';
        $cModuleContent->video_link = 'https://youtu.be/rK_d5g3pBb8';
        $cModuleContent->pdf_file = 'default.pdf';
        $cModuleContent->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores unde ipsam neque doloremque laboriosam dolorem magni rerum quia sunt, cumque eos, laborum consequatur saepe, sed aperiam velit blanditiis in architecto.';
        $cModuleContent->ordinal = 1;
        $cModuleContent->created_at = now();
        $cModuleContent->updated_at = now();
        $cModuleContent->save();
        
        $cModuleContent = new \App\Models\CourseModuleContent();
        $cModuleContent->course_module_id = 4;
        $cModuleContent->title_module_content = 'Pengenalan React Native';
        $cModuleContent->slug = 'pengenalan-react-native';
        $cModuleContent->video_link = 'https://youtu.be/rK_d5g3pBb8';
        $cModuleContent->pdf_file = 'default.pdf';
        $cModuleContent->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores unde ipsam neque doloremque laboriosam dolorem magni rerum quia sunt, cumque eos, laborum consequatur saepe, sed aperiam velit blanditiis in architecto.';
        $cModuleContent->ordinal = 1;
        $cModuleContent->created_at = now();
        $cModuleContent->updated_at = now();
        $cModuleContent->save();
    }
}
