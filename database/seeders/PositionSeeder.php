<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cCategory = new \App\Models\Position();
        $cCategory->division_id = 1;
        $cCategory->position_name = 'Chief Executive Officer';
        $cCategory->created_at = now();
        $cCategory->updated_at = now();
        $cCategory->save();
        
        $cCategory = new \App\Models\Position();
        $cCategory->division_id = 1;
        $cCategory->position_name = 'Chief Technology Officer';
        $cCategory->created_at = now();
        $cCategory->updated_at = now();
        $cCategory->save();
        
        $cCategory = new \App\Models\Position();
        $cCategory->division_id = 2;
        $cCategory->position_name = 'General Manager';
        $cCategory->created_at = now();
        $cCategory->updated_at = now();
        $cCategory->save();

        $cCategory = new \App\Models\Position();
        $cCategory->division_id = 2;
        $cCategory->position_name = 'General Affair';
        $cCategory->created_at = now();
        $cCategory->updated_at = now();
        $cCategory->save();
        
        $cCategory = new \App\Models\Position();
        $cCategory->division_id = 3;
        $cCategory->position_name = 'IT Support Officer';
        $cCategory->created_at = now();
        $cCategory->updated_at = now();
        $cCategory->save();
    }
}
