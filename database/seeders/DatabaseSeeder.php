<?php

namespace Database\Seeders;

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
         \App\Models\Post::factory(18)->create();
        \App\Models\User::create([
            'email' => 'leo@admin.com',
            'password' => bcrypt('123456'),
            'name' => 'Administrator',
        ]);
    }
}
