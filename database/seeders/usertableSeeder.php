<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\User;

class usertableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(database_path('json/user.json')); // Corrected path
        $users = collect(json_decode($json)); // Renamed variable to plural

        $users->each(function ($user) { 
            User::create([ // Capitalized 'User'
                'name' => $user->name, 
                'email' => $user->email,
                'age'=>$user->age,
                'city'=>$user->city
            ]);
        });
    }
}
