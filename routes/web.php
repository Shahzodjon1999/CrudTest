<?php

use App\Http\Controllers\LoginController;
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
})->name('creatViewRoute');

Route::get('/persons', [PersonController::class, "index"])->name('index');

Route::post('/Add', [PersonController::class, "createPerson"])->name('add');
Route::get('/delete/{id}', [PersonController::class, 'DeletePerson'])->name('delete');
Route::post('/ubdate/{id}', [PersonController::class, 'UpdatePerson'])->name('ubdate');
Route::get('/Show/{id}', [PersonController::class, 'ShowViewEdite'])->name('edite');

Route::get('/Register', function () {
    return view('RegisterView');
});
Route::post('/Register',[LoginController::class,'RegisterLog'])->name('reg');

Route::get('/SignIn', function () {
    return view('LoginView');
});
Route::post('/SignIn',[LoginController::class,'CheckLog'])->name('chek');
