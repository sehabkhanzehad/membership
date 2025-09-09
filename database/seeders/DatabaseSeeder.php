<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Year;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        foreach (range(2022, 2030) as $year) {
            Year::create(['year' => $year]);
        }

        User::create([
            'name' => 'Admin',
            'email' => 'admin@email.com',
            'password' => 'password',
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Rasel',
            'email' => 'rasel@email.com',
            'password' => 'password',
            'role' => 'collector',
        ]);

        $this->call([
            MemberSeeder::class
        ]);
    }
}
