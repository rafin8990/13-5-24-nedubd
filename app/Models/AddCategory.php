<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddCategory extends Model
{
    use HasFactory;

    protected $table = 'add_category';

    protected $fillable = [
        'category_name',
        'status',
        'action',
        'school_code',
    ];
}
