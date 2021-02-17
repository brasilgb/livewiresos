<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Clients\{
    ShowClient,
    CreateClient,
    EditClient
};
use App\Http\Livewire\Orders\{
    ShowOrder,
    CreateOrder,
    EditOrder
};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('clients', ShowClient::class)->name('clients');
Route::middleware(['auth:sanctum', 'verified'])->get('clients/create', CreateClient::class)->name('clients.create');
Route::middleware(['auth:sanctum', 'verified'])->get('clients/edit/{client}', EditClient::class)->name('clients.edit');

Route::middleware(['auth:sanctum', 'verified'])->get('orders', ShowOrder::class)->name('orders');
Route::middleware(['auth:sanctum', 'verified'])->post('orders/autocomplete', CreateOrder::class)->name('orders.autocomplete');
Route::middleware(['auth:sanctum', 'verified'])->get('orders/create', CreateOrder::class)->name('orders.create');
Route::middleware(['auth:sanctum', 'verified'])->get('orders/edit/{order}', EditOrder::class)->name('orders.edit');
