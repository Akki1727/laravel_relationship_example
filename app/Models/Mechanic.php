<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mechanic extends Model
{
    use HasFactory;
    public $table = 'mechanics';
    protected $fillable = [
        'name'
    ];

    // for hacOneThrough relationship
    // public function carOwner(){
    //     return $this->hasOneThrough(Owners::class,Car::class,'mechanic_id','car_id','id','id');
    // }

    public function carOwner(){
        return $this->hasManyThrough(Owners::class,Car::class,'mechanic_id','car_id','id','id');
    }
}
