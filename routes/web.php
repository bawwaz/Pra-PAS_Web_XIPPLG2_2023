<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReceiptController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ItempopularityController;
use App\Models\itempopularity;

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
    return view('home');
});

Route::get('/home', function () {
    return view('home', [
        "title" => "home",
    ]);
});

Route::get('/receipts/all', [ReceiptController::class, 'index'])->name('receipts.all');
Route::get('/receipt/detail/{receipt}', [ReceiptController::class, 'show']);

Route::get('/item/all', [ItemController::class, 'index'])->name('item.all');
Route::get('/item/detail/{item}', [ItemController::class, 'show']);

Route::get('/itempop/all', [ItempopularityController::class, 'index'])->name('item.all');
Route::get('/itempop/detail/{itempop}', [ItempopularityController::class, 'show']);