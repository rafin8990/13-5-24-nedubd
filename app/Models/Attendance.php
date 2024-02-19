<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'student_id',
        'class_id',
        'section_id',
        'att_date',
        'edit_date',
        'attendence',
        'school_code',

    ];
   

    protected $table="attendances";
    public function student()
    {
        return $this->belongsTo('App\Models\Student', 'student_id');
    }

}
