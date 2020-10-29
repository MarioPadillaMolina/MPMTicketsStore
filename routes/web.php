<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\BackendTicketController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\TicketController;
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
//Backend
Route::get('backend', [BackendController::class, 'main'])->name('backend.main');
Route::resource('backend/ticket', BackendTicketController::class, ['names' => 'backend.ticket']);

//Frontend
Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('ticket', [TicketController::class, 'index'])->name('ticket.index');
Route::get('ticket/{id}', [TicketController::class, 'show'])->name('ticket.show');

//fallback
Route::fallback([IndexController::class, 'fallback'])->name('fallback');
