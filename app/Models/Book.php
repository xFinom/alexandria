<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function copy(){
        return $this->hasMany(Copy::class);
    }

    protected $fillable = ['ISBN', 'title', 'author', 'pages', 'edition', 'publisher'];
}
