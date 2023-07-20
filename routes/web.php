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

Route::get('/creat', function (){return view('createPersonView');})->name('creatViewRoute');
Route::get('/Register', function (){ return view('RegisterView');})->name('regview');
Route::get('/SignIn', function () {return view('LoginView');})->name('log');  

Route::get('/', [PersonController::class, "index"])->name('index');


Route::post('/Add', [PersonController::class, "createPerson"])->name('add');
Route::post('/ubdate/{id}', [PersonController::class, 'UpdatePerson'])->name('ubdate');
Route::post('/Register',[LoginController::class,'RegisterLog'])->name('reg');
Route::post('/SignIn',[LoginController::class,'CheckLog'])->name('chek');

Route::get('/show/{id}',[PersonController::class,'show'])->name('show');
Route::get('/edite/{id}', [PersonController::class, 'EditeView'])->name('edite');
Route::get('/delete/{id}', [PersonController::class, 'DeletePerson'])->name('delete');




