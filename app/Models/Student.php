<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable=[
        'first_name',
        'last_name',
        'birth_date',
        'student_id',
        'class',
        'section',
        'year',
        'gender',
        'image',
        'present_address',
        'present_street',
        'present_city',
        'present_country',
        'present_zip_code',
        'parmanent_address',
        'parmanent_street',
        'parmanent_city',
        'parmanent_country',
        'parmanent_zip_code',
        'email',
        'phoneNumber',
        'password',
        'role',
    ];
    protected $table="students";
    public function attendances()
    {
        return $this->hasMany('App\Models\Attendance', 'student_id');
    }
}
