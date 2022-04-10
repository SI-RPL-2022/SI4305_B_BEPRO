<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cCategory = new \App\Models\Division();
        $cCategory->division_name = 'Top-Level Management';
        $cCategory->created_at = now();
        $cCategory->updated_at = now();
        $cCategory->save();
        
        $cCategory = new \App\Models\Division();
        $cCategory->division_name = 'Operation';
        $cCategory->created_at = now();
        $cCategory->updated_at = now();
        $cCategory->save();
        
        $cCategory = new \App\Models\Division();
        $cCategory->division_name = 'Technology';
        $cCategory->created_at = now();
        $cCategory->updated_at = now();
        $cCategory->save();
        
        $cCategory = new \App\Models\Division();
        $cCategory->division_name = 'Financial';
        $cCategory->created_at = now();
        $cCategory->updated_at = now();
        $cCategory->save();
        
        $cCategory = new \App\Models\Division();
        $cCategory->division_name = 'Marketing';
        $cCategory->created_at = now();
        $cCategory->updated_at = now();
        $cCategory->save();
    }
}
