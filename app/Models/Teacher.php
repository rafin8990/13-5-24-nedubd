<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable=[
        'firstname',
        'lastname',
        'birth_date',
        'teacher_id',
        'designation',
        'section',
        'joindate',
        'gender',
        'image',
        'present_address',
        'present_city',
        'present_state',
        'present_country',
        'present_zip_code',
        'parmanent_address',
        'parmanent_state',
        'parmanent_city',
        'parmanent_country',
        'parmanent_zip_code',
        'email',
        'mobile',
        'password',
        'nid',
        'role',
        'school_code'
    ];
    protected $table="teachers";
}
