<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Admin::insert([
            'name'=>'Administrator',
            'email'=>'Hero@admin.com',
            'password'=>bcrypt('adminhero'),
            'role'=>'admin',
            'created_at'=> \Carbon\Carbon::now('Asia/Jakarta')
        ]);

        $this->call([
            AdminSeeder::class,
        ]);
    }
}
