<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Head_teacher extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'email',
        'designation',
        'address',
        'nid',
        'details',
        'gender',
        'phone_number',
        'image',
        'role',
        'password',
        'school_code'

    ];
    protected $table="head_teachers";
}
