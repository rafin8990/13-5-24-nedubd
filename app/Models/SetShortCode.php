<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SetShortCode extends Model
{
    use HasFactory;

    protected $table = 'set_short_code';

    protected $fillable = [
        'class_name',
        'exam_name',
        'exam_year',
        'short_code',
        'status',
        'action',
        'school_code',
    ];
}
