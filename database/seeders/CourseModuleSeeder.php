<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CourseModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cModule = new \App\Models\CourseModule();
        $cModule->course_id = 1;
        $cModule->module_name = 'Pengenalan';
        $cModule->slug = 'pengenalan';
        $cModule->ordinal = 1;
        $cModule->created_at = now();
        $cModule->updated_at = now();
        $cModule->save();
        
        $cModule = new \App\Models\CourseModule();
        $cModule->course_id = 1;
        $cModule->module_name = 'Instalasi Laravel';
        $cModule->slug = 'instalasi-laravel';
        $cModule->ordinal = 2;
        $cModule->created_at = now();
        $cModule->updated_at = now();
        $cModule->save();


        $cModule = new \App\Models\CourseModule();
        $cModule->course_id = 2;
        $cModule->module_name = 'Pengenalan';
        $cModule->slug = 'pengenalan';
        $cModule->ordinal = 1;
        $cModule->created_at = now();
        $cModule->updated_at = now();
        $cModule->save();

        $cModule = new \App\Models\CourseModule();
        $cModule->course_id = 3;
        $cModule->module_name = 'Pengenalan';
        $cModule->slug = 'pengenalan';
        $cModule->ordinal = 1;
        $cModule->created_at = now();
        $cModule->updated_at = now();
        $cModule->save();
    }
}
