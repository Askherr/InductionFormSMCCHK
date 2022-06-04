<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('post_user', function (Blueprint $table) {
            $table->id();
            $table->string('CompanyName')->nullable()->default('');
            $table->string('CompanyPosition')->nullable()->default('');
            $table->string('nameUser');
            $table->string('birthPlace');
            $table->date('birthDate');
            $table->string('gender')->nullable()->default('');
            $table->string('BloodType')->nullable()->default('');
            $table->string('Address')->nullable()->default('');
            $table->string('phoneNumber');
            $table->string('emergencyphoneNumber');
            $table->string('email')->nullable()->default('');
            // Gambar file
            $table->string('identity');
            $table->string('photo');
            $table->string('antigen');
            $table->string('vaccine');
            $table->string('health');
            // // Nullable file
            $table->string('visa')->nullable()->default('');
            $table->string('operatorLicense')->nullable()->default('');
            $table->string('certificate')->nullable()->default('');
            // Disease
            $table->string('riwayat_penyakit')->nullable()->default('tidak ada');
            $table->string('schedule');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_user');
    }
};
