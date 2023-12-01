<?php

namespace App\Models;

use App\Http\Controllers\UserRentalController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentalCopy extends Model
{
    use HasFactory;

    public function book() {
        return $this->belongsTo(Book::class);
    }

    public function user_rentals() {
        return $this->belongsTo(UserRental::class);
    }
}
