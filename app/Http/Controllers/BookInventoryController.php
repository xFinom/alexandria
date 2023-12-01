<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Models\BookInventory;
use Illuminate\Support\Facades\Gate;

class BookInventoryController extends Controller
{
    public function index()
    {
        if (!Gate::allows('isAdmin', auth()->user())) {
            abort(403);
        }

        return view('Inventory.showAllInventory', ['copies' => BookInventory::with('book:id,ISBN,title,author')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (!Gate::allows('isAdmin', auth()->user())) {
            abort(403);
        }

        return view('Inventory.createInventoryItem', ['books' => Book::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'book_id' => 'required',
            'stock' => 'required',
            'price' => 'required',
        ]);

        $inventory = new BookInventory();

        $inventory->book_id = $request->book_id;
        $inventory->stock = $request->stock;
        $inventory->price = $request->price;

        $inventory->save();

        return redirect()->route('inventory.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(BookInventory $inventory)
    {
        if (!Gate::allows('isAdmin', auth()->user())) {
            abort(403);
        }

        return view('Inventory.showInventory', ['copy' => BookInventory::find($inventory->id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BookInventory $inventory)
    {
        if (!Gate::allows('isAdmin', auth()->user())) {
            abort(403);
        }

        return view('Inventory.editInventory', ['copy' => BookInventory::find($inventory->id), 'books' => Book::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BookInventory $inventory)
    {
        $request->validate([
            'book_id' => 'required',
            'stock' => 'required',
            'price' => 'required',
        ]);

        $inventory->book_id = $request->book_id;
        $inventory->stock = $request->stock;
        $inventory->price = $request->price;

        $inventory->save();

        return redirect()->route('inventory.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BookInventory $inventory)
    {
        $inventory->delete();

        return redirect()->route('inventory.index');
    }
}
