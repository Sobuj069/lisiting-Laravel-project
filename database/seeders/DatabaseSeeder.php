<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\user;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UsertableSeeder::class,
        ]);
    }
}
