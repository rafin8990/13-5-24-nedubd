<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolInfo extends Model
{
    use HasFactory;

    protected $fillable=[
        'schoolName',
        'email',
        'phone_number',
        'logo',
        'address',
        'school_code'

    ];
    protected $table="_school_addresses";
}
