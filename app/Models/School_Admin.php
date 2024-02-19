<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School_Admin extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'email',
        'phone_number',
        'image',
        'role',
        'password',
        'school_code'

    ];
    protected $table="school_admins";
}
