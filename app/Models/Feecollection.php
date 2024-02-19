<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Feecollection extends Model
{
    use HasFactory,Notifiable;
    protected $fillable=[
        'class',
        'year',
        'month',
        'admission_fee',
        'tuition_fee',
        'library_fee',
        'transport_fee',
        'curriculum_fee',
        'school_code',
    ];
    protected $table="feecollestions";
}
