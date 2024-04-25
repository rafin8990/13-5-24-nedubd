<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Waiver extends Model
{
    use HasFactory;
    protected $table = "waivers";
    protected $fillable = [
        "fee_id",
        "nedubd_student_id",
        "waiver_type_name",
        "waiver_percentage",
        "waiver_expire_date",
        "schoolCode",
        "action",
    ];
}
