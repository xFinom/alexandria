<?php

namespace App\Http\Controllers;

use App\Models\BookInventory;
use App\Models\UserPurchases;
use Illuminate\Http\Request;

class UserPurchasesController extends Controller
{
    public function index() {
        return view('list-shop', ['items' => BookInventory::where('stock','>', 0)->get()]);
    }

    public function store(array $requestData) {
        $book_inventory = BookInventory::find($requestData['book_inventory_id']);

        $book_inventory->stock--;

        $book_inventory->save();

        $purchase = new UserPurchases();

        $purchase->book_inventory_id = $requestData['book_inventory_id'];
        $purchase->user_id = auth()->id();

        $purchase->save();
    }
}
