<?php

namespace App\Http\Controllers;

use App\Models\Copy;
use App\Models\Book;
use Illuminate\Http\Request;

class CopyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Copy.showAllCopies', ['copies' => Copy::with('book:id,title')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Copy.createCopy', ['books' => Book::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $copy = new Copy();

        $copy->book_id = $request->book_id;
        $copy->available = true;

        $copy->save();

        return redirect("/copy");
    }

    /**
     * Display the specified resource.
     */
    public function show(Copy $copy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Copy $copy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Copy $copy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Copy $copy)
    {
        //
    }
}
