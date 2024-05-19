<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;
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
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('tickets', [App\Http\Controllers\TicketController::class,'index']);
Route::get('tickets/create', [App\Http\Controllers\TicketController::class,'create']);
Route::post('tickets/create', [App\Http\Controllers\TicketController::class,'store']);
Route::get('tickets/{id}/edit', [App\Http\Controllers\TicketController::class,'edit']);
Route::put('tickets/{id}/edit', [App\Http\Controllers\TicketController::class,'update']);
Route::get('tickets/{id}/delete', [App\Http\Controllers\TicketController::class,'destroy']);
