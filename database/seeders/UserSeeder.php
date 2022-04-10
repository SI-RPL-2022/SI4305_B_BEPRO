<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Traits\HasRoles;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Admin Course',
            'email' => 'admin@mail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('admin123'),
            'remember_token' => \Str::random(60),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        event(new Registered($admin));
        $admin->assignRole('Admin');
        
        $mentor = User::create([
            'name' => 'mentor Course',
            'email' => 'mentor@mail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('mentor123'),
            'remember_token' => \Str::random(60),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        event(new Registered($mentor));
        $mentor->assignRole('Mentor');
        
        $employee = User::create([
            'name' => 'Employee Course',
            'email' => 'employee@mail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('employee123'),
            'remember_token' => \Str::random(60),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        event(new Registered($employee));
        $employee->assignRole('Employee');
    }
}
