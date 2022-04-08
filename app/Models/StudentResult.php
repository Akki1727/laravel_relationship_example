<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentResult extends Model
{
    use HasFactory;
    public $table = 'student_results';
    protected $fillable = [
        'student_id',
        'marks',
    ];

    // for one to one inverse relatioship
    public function student(){
        return $this->belongsTo(Student::class);
    }

    //for one to many inverse relationship
    public function studentmany(){
        return $this->belongsTo(Student::class,'student_id','id');
    }
}
