<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Classes extends Model
{
    use HasFactory,Notifiable;
    protected $fillable=[
        'class',
        'school_code'
    ];
    protected $table="classes";
    // public function sections(){
    //     return $this->hasMany(Section::class);
    // }
}
