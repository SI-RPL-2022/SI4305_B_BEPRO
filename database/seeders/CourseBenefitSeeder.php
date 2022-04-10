<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CourseBenefitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cBenefit = new \App\Models\CourseBenefit();
        $cBenefit->course_id = 1;
        $cBenefit->benefit = 'Materi Menarik';
        $cBenefit->created_at = now();
        $cBenefit->updated_at = now();
        $cBenefit->save();
        
        $cBenefit = new \App\Models\CourseBenefit();
        $cBenefit->course_id = 1;
        $cBenefit->benefit = 'Akses Selamanya';
        $cBenefit->created_at = now();
        $cBenefit->updated_at = now();
        $cBenefit->save();
        
        $cBenefit = new \App\Models\CourseBenefit();
        $cBenefit->course_id = 1;
        $cBenefit->benefit = 'Update Video Terbaru';
        $cBenefit->created_at = now();
        $cBenefit->updated_at = now();
        $cBenefit->save();
        
        $cBenefit = new \App\Models\CourseBenefit();
        $cBenefit->course_id = 2;
        $cBenefit->benefit = 'Akses Video Selamanya';
        $cBenefit->created_at = now();
        $cBenefit->updated_at = now();
        $cBenefit->save();
        
        $cBenefit = new \App\Models\CourseBenefit();
        $cBenefit->course_id = 2;
        $cBenefit->benefit = 'Trend Materi';
        $cBenefit->created_at = now();
        $cBenefit->updated_at = now();
        $cBenefit->save();

        $cBenefit = new \App\Models\CourseBenefit();
        $cBenefit->course_id = 3;
        $cBenefit->benefit = 'Akses Video Selamanya';
        $cBenefit->created_at = now();
        $cBenefit->updated_at = now();
        $cBenefit->save();
        
        $cBenefit = new \App\Models\CourseBenefit();
        $cBenefit->course_id = 3;
        $cBenefit->benefit = 'Trend Materi';
        $cBenefit->created_at = now();
        $cBenefit->updated_at = now();
        $cBenefit->save();
    }
}
