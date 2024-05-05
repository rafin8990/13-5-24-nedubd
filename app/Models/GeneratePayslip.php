<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneratePayslip extends Model
{
    use HasFactory;

    protected $table = "generate_payslips";
    protected $fillable = [
        "month",
        "year",
        "last_pay_date",
        "student_id",
        "class",
        "group",
        "pay_slip_type",
        "amount",
        "waiver",
        "payable",
        "school_code",
        "action",
    ];
}
