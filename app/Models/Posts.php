<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comments

class Posts extends Model
{
    use HasFactory;
    public $table = 'posts';
    protected $fillable = [
        'title',
    ];

    public function tags(){
        return $this->belongsToMany(Tags::class)->wherePivotIn('posts_id', [1, 2]);;
    }

    public function comment(){
        return $this->morphOne(Comments::class,'commentable');
    }
}
