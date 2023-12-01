<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRental extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function rental_copy() {
        return $this->hasOne(RentalCopy::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
