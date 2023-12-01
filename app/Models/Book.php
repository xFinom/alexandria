<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $timestamps = false;

    public function inventory_book(){
        return $this->hasOne(BookInventory::class);
    }

    public function rental_copy(){
        return $this->hasMany(RentalCopy::class);
    }

    protected function ISBN(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => implode('-', str_split($value, 3)),
        );
    }

    protected $fillable = ['ISBN', 'title', 'author', 'pages', 'edition', 'publisher'];
}
