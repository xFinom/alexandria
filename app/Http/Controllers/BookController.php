<?php

namespace App\Http\Controllers;

use App\Mail\BookExample;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (!Gate::allows('isAdmin', auth()->user())) {
            abort(403);
        }

        return view('Book/showAllBooks', ['books' => Book::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (!Gate::allows('isAdmin', auth()->user())) {
            abort(403);
        }

        return view('Book/createBook');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'ISBN' => 'required',
            'title' => 'required',
            'edition' => 'required',
            'pages' => 'required',
            'author' => 'required',
            'publisher' => 'required',
        ]);

        $book = new Book();

        $book->ISBN = $request->ISBN;
        $book->title = $request->title;
        $book->author = $request->author;
        $book->pages = $request->pages;
        $book->edition = $request->edition;
        $book->publisher = $request->publisher;

        $book->save();

        Mail::to($request->user())->send(new BookExample($book));

        return redirect("/book")->with('success', 'Book Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        if (!Gate::allows('isAdmin', auth()->user())) {
            abort(403);
        }

        return view('Book/showBook', ['book' => Book::find($book->id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        if (!Gate::allows('isAdmin', auth()->user())) {
            abort(403);
        }

        return view('Book/editBook', ['book' => Book::find($book->id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'ISBN' => 'required',
            'title' => 'required',
            'edition' => 'required',
            'pages' => 'required',
            'author' => 'required',
            'publisher' => 'required',
        ]);

        $book->ISBN = $request->ISBN;
        $book->title = $request->title;
        $book->edition = $request->edition;
        $book->pages = $request->pages;
        $book->author = $request->author;
        $book->publisher = $request->publisher;

        $book->save();

        return redirect()->route('book.index')->with('success', 'Book Edited');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route('book.index')->with('success', 'Book Deleted');
    }
}
