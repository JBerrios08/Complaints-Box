<?php

use App\Livewire\Cliente\Buzon;
use App\Livewire\Cliente\Home;
use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('layouts.main');
});*/


Route::get('/', Home::class);
Route::get('/buzon', Buzon::class);