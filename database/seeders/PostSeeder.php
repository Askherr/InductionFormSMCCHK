<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\PostUser::insert([

            'CompanyName'=>'PT ABC',
            'CompanyPosition' => 'Manager',
            'nameUser' => 'BryanAbc',
            'birthPlace' => 'Jakarta',
            // 'birthDate' => '23/08/1999',
            'BloodType' => 'O',
            'Address'=> 'Marunda baru',
            'phoneNumber' => '0897231313',
            'email' => 'sony@example.com',
            'identity' => '',
            'photo' => '',
            'antigen' => '',
            'vaccine' => '',
            'health' => '',
            'visa' => '',
            'operatorLicense' => '',
            'certificate' => '',
            'diseaseHistory' => '',
            'schedule' => '',
            'created_at'=> \Carbon\Carbon::now('Asia/Jakarta')

        ]);
        $this->call([
            PostUser::class,
        ]);
    }
}
