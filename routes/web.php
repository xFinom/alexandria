<?php

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BookInventoryController;
use App\Http\Controllers\RentalCopyController;
use App\Http\Controllers\UserRentalController;
use App\Http\Controllers\UserPurchasesController;
use App\Http\Controllers\StripeController;
use App\Models\Book;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::post('/checkout', [StripeController::class,'checkout'])->name('checkout');
Route::get('/success', [StripeController::class, 'success'])->name('success');

Route::get('/api', function () {
    return response()->json(Book::all());
});

route::get('/pdf', function () {
    $pdf = Pdf::loadView('pdf.catalog', ['books' => Book::all()]);
    return $pdf->download('catalog.pdf');
});

Route::resource('book', BookController::class);
Route::resource('inventory', BookInventoryController::class);
Route::resource('rental', RentalCopyController::class);
Route::resource('rentals', UserRentalController::class);
Route::resource('purchases', UserPurchasesController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {

        $users = \App\Models\User::class->count();
        return view('dashboard', ['users' => $users, ]);
    })->name('dashboard');
});
