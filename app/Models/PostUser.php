<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Database\Factories\PostFactory;

class PostUser extends Model
{
    use HasFactory;
    protected $table = 'post_user';
    

    protected $fillable = [
        'CompanyName',
        'CompanyPosition',
        'nameUser',
        'birthPlace',
        'birthDate',
        'BloodType',
        'gender',
        'Address',
        'phoneNumber',
        'email',
        'identity',
        'photo',
        'antigen',
        'vaccine',
        'health',
        'visa',
        'operatorLicense',
        'certificate',
        'riwayat_penyakit',
        'emergencyphoneNumber',
        'schedule',


    ];
    protected $hidden = [
        'remember_token'
    ];

}
