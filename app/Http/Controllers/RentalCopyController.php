<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\RentalCopy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class RentalCopyController extends Controller
{
    public function index()
    {
        if (!Gate::allows('isAdmin', auth()->user())) {
            abort(403);
        }

        return view('Copy.showAllCopies', ['copies' => RentalCopy::with('book:id,ISBN,title,author')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (!Gate::allows('isAdmin', auth()->user())) {
            abort(403);
        }

        return view('Copy.createCopy', ['books' => Book::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'book_id' => 'required',
            'copies' => 'required|integer|min:1',
        ]);

        $book = Book::findOrFail($request->book_id);
        $book->rental_copy()->createMany(array_fill(0, $request->copies, []));

        return redirect()->route('rental.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(RentalCopy $rental)
    {
        if (!Gate::allows('isAdmin', auth()->user())) {
            abort(403);
        }

        return view('Copy.showCopy', ['copy' => RentalCopy::find($rental->id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RentalCopy $rental)
    {
        if (!Gate::allows('isAdmin', auth()->user())) {
            abort(403);
        }

        return view('Inventory.editInventory', ['copy' => RentalCopy::find($rental->id), 'books' => Book::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RentalCopy $rental)
    {
        $request->validate([
            'status' => 'required|in:available,rented',
        ]);

        $rental->status = $request->status;

        $rental->save();

        return redirect()->route('rental.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RentalCopy $rental)
    {
        $rental->delete();

        return redirect()->route('rental.index');
    }
}
