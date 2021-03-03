<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CitasController;

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
    return view('auth.login');
});
// 
// Route::get('/citas', function () {
//     return view('citas.index');
// });

Route::resource('citas',CitasController::class)->middleware('auth');

Auth::routes(['reset'=>false]);

Route::get('/home', [CitasController::class, 'index'])->name('home');

Route::group(['middleware'=>'auth'],function(){
    Route::get('/', [CitasController::class, 'index'])->name('home');
});