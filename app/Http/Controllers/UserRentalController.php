<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\RentalCopy;
use App\Models\UserRental;
use Illuminate\Http\Request;

class UserRentalController extends Controller
{
    public function index () {
        return view('list-rent', ['rentals' => RentalCopy::where('status','available')->get()]);
    }

    public function store(Request $request) {
        $request->validate([
            'rental_copy_id' => 'required'
        ]);

        $rental_copy = RentalCopy::find($request->rental_copy_id);

        $rental_copy->status = 'rented';
        $rental_copy->save();

        $user_rental = new UserRental();

        $duration = 15;

        $user_rental->rental_copy_id = $request->rental_copy_id;
        $user_rental->user_id = auth()->id();
        $user_rental->duration = $duration;
        $user_rental->start_date = today();
        $user_rental->return_date = today()->addDays($duration);

        $user_rental->save();

        return redirect()->route('rentals.index')->with('success', 'Book rented for 15 Days!');
    }
}
