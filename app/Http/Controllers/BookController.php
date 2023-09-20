<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Book/showAllBooks', ['books' => Book::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Book/createBook');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $book = new Book();

        $book->ISBN = $request->ISBN;
        $book->title = $request->title;
        $book->author = $request->author;
        $book->pages = $request->pages;
        $book->edition = $request->edition;
        $book->publisher = $request->publisher;

        $book->save();

        return redirect("/book");
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('Book/editBook', ['book' => Book::find($book->id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $updated_book = Book::find($book->id);

        $updated_book->ISBN = $request->ISBN;
        $updated_book->title = $request->title;
        $updated_book->author = $request->author;
        $updated_book->pages = $request->pages;
        $updated_book->edition = $request->edition;
        $updated_book->publisher = $request->publisher;

        $updated_book->save();

        return redirect("/book");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        //
    }
}
