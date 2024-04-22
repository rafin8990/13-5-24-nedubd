<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddGroup extends Model
{
    use HasFactory;

    protected $table = 'add_group';

    protected $fillable = [
        'group_name',
        'status',
        'action',
        'school_code',
    ];

    
}
