<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    public $table = 'students';
    protected $fillable = [
        'name',
        'email',
        'number',
    ];

    //one to one relationship
    public function studentresult(){
        return $this->hasOne(StudentResult::class);
    }

    public function studentresultmany(){
        return $this->hasMany(StudentResult::class);
    }
}
