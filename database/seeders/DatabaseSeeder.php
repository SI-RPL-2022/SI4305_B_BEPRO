<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            DivisionSeeder::class,
            PositionSeeder::class,
            UserSeeder::class,
            UserEmployeeSeeder::class,
            CourseCategorySeeder::class,
            CourseSeeder::class,
            CourseBenefitSeeder::class,
            CourseModuleSeeder::class,
            CourseModuleContentSeeder::class,
            CourseModuleQuizSeeder::class,
        ]);
    }
}
