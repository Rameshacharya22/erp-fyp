<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//         \App\Models\User::factory(10)->create();


        \App\Models\User::factory()->create(
            [
                'name' => 'Admin',
                'email' => 'admin@erp.test',
                'password' => bcrypt('12345678'),
                'role' => 'Admin'
            ]);

        \App\Models\User::factory()->create(
            [
                'name' => 'User',
                'email' => 'user@erp.test',
                'password' => bcrypt('user'),
                'role' => 'User'
            ]
        );

        \App\Models\Employee::create(
            [
                'first_name' => 'User',
                'email' => 'user@erp.test',
            ]
        );

        \App\Models\User::factory()->create(
            [
                'name' => 'Aashish',
                'email' => 'aashish@erp.test',
                'password' => bcrypt('user'),
                'role' => 'User'
            ]
        );

        \App\Models\Employee::create(
            [
                'first_name' => 'Aashish',
                'email' => 'aashish@erp.test',
            ]
        );


        $this->call(DepartmentSeeder::class);
    }
}
