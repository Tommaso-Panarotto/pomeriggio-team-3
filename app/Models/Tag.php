<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    // aggiungi le fillables
    protected $fillable = [
        'name',
        'color',
    ];

    public function posts(){
        return $this->belongsToMany(Post::class);
    }
}
