<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\CalendarEvents;
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

Route::get('/', function () {
    return view('welcome');
});

// LiveWire Routes
Route::get('/events', CalendarEvents::class)->name('events.index');
