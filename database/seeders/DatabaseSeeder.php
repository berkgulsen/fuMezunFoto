<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(AkademiSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(SubSeeder::class);

        $this->call(DepartmentSeeder::class);
        $this->call(YearSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(AdminSeeder::class);
    }
}
