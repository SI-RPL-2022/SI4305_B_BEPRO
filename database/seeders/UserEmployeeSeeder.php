<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserEmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $uEmployee = new \App\Models\UserEmployee();
        $uEmployee->user_id = 2;
        $uEmployee->avatar = 'default-mentor';
        $uEmployee->phone_number = '083856116340';
        $uEmployee->about_me = 'MENTOR : Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo magni reiciendis amet dolorem ea iusto harum autem neque. Sequi animi corporis iste magni perferendis ipsam ducimus commodi dolor molestiae nobis!';
        $uEmployee->position_id = 1;
        $uEmployee->status_user = 'active';
        $uEmployee->created_at = now();
        $uEmployee->updated_at = now();
        $uEmployee->save();
        
        $uEmployee = new \App\Models\UserEmployee();
        $uEmployee->user_id = 3;
        $uEmployee->avatar = 'default-employee';
        $uEmployee->phone_number = '083856116340';
        $uEmployee->about_me = 'EMPLOYEE : Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo magni reiciendis amet dolorem ea iusto harum autem neque. Sequi animi corporis iste magni perferendis ipsam ducimus commodi dolor molestiae nobis!';
        $uEmployee->status_user = 'active';
        $uEmployee->position_id = 3;
        $uEmployee->created_at = now();
        $uEmployee->updated_at = now();
        $uEmployee->save();
    }
}
