<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SampleController;
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
Route::get('/create', [SampleController::class, 'create']);
Route::post('/store',[SampleController::class,'store']);
Route::get('/index', [SampleController::class, 'index'])->name('index');
Route::get('/edit/{content}', [SampleController::class, 'edit'])->name('edit');
Route::post('/update/{content}', [SampleController::class, 'update'])->name('update');
Route::get('/delete/{content}', [SampleController::class, 'destroy'])->name('destroy');