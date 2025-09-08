<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $members = [
            [
                'name' => 'Alice Smith',
                'email' => 'alice.smith@example.com',
                'phone' => '1234567890',
            ],
            [
                'name' => 'Bob Johnson',
                'email' => 'bob.johnson@example.com',
                'phone' => '2345678901',
            ],
            [
                'name' => 'Charlie Brown',
                'email' => 'charlie.brown@example.com',
                'phone' => '3456789012',
            ],
            [
                'name' => 'Diana Prince',
                'email' => 'diana.prince@example.com',
                'phone' => '4567890123',
            ],
            [
                'name' => 'Ethan Hunt',
                'email' => 'ethan.hunt@example.com',
                'phone' => '5678901234',
            ]
        ];

        // DB::table('users')->insert($members);
        foreach($members as $member) {
            \App\Models\User::create($member);
        }
    }
}
