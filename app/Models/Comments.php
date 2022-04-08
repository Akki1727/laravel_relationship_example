<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;
    public $table = 'comments';
    protected $fillable = [
        'name',
        'commenttable_id',
        'commenttable_type',
    ];

    public function commentable(){
        return $this->morphTo();
    }
}
