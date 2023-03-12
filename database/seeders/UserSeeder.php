<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@ut.com',
            'password' => Hash::make('password'),
        ]);

        $teacher = \App\Models\User::factory()->create([
            'name' => 'Dr Mehdi Mardani',
            'email' => 'mehdimardani@yahoo.com',
            'password' => Hash::make('password'),
            'role' => 'teacher',
            'gender' => 'male'
        ]);

        $user->assignRole('admin');
    }
}
