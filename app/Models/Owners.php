<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owners extends Model
{
    use HasFactory;
    public $table = 'owners';
    protected $fillable = [
        'car_id',
        'name',
    ];
}
