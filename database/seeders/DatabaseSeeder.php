<?php

namespace Database\Seeders;

use Database\Factories\PostFactory;
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
        // \App\Models\PostUser::factory(10)->create();
        $this->call(AdminSeeder::class);
        // $this->call(PostSeeder::class);

    
    }
}
