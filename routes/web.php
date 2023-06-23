<?php

use App\Http\Controllers\PersonController;
use Faker\Provider\ar_EG\Person;
use Illuminate\Support\Facades\Route;

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
    return view('createPersonView');
});

Route::get('/persons',[PersonController::class,"index"])->name('index');

Route::post('/Add',[PersonController::class,"createPerson"])->name('add');
Route::get('/show',[PersonController::class,'ShowView']);
Route::get('/delete/{id}',[PersonController::class,'DeletePerson'])->name('delete');
Route::post('/ubdate/{id}',[PersonController::class,'UbdatePerson'])->name('ubdate');



