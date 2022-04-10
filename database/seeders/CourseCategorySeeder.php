<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CourseCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cCategory = new \App\Models\CourseCategory();
        $cCategory->category_name = 'Kelas Starter';
        $cCategory->created_at = now();
        $cCategory->updated_at = now();
        $cCategory->save();
        
        $cCategory = new \App\Models\CourseCategory();
        $cCategory->category_name = 'Kelas Medium';
        $cCategory->created_at = now();
        $cCategory->updated_at = now();
        $cCategory->save();
        
        $cCategory = new \App\Models\CourseCategory();
        $cCategory->category_name = 'Kelas Expert';
        $cCategory->created_at = now();
        $cCategory->updated_at = now();
        $cCategory->save();
    }
}
