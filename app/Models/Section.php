<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Section extends Model
{
    use HasFactory,Notifiable;
    protected $fillable=[
        'class',
        'section',
        'school_code'
    ];
    protected $table="sections";

    // public function class(){
    //     return $this->belongsTo(Classes::class);
    // }
}
