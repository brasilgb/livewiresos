<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Clientes\{
    ShowCliente,
    CreateCliente,
    EditCliente
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

Route::middleware(['auth:sanctum', 'verified'])->get('clientes', ShowCliente::class)->name('clientes');
Route::middleware(['auth:sanctum', 'verified'])->get('clientes/create', CreateCliente::class)->name('clientes.create');
Route::middleware(['auth:sanctum', 'verified'])->get('clientes/edit/{cliente}', EditCliente::class)->name('clientes.edit');
