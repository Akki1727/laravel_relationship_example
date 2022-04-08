<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    public $table = 'cars';
    protected $fillable = [
        'mechanic_id',
        'model',
     
    ];
}
