<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThingController;
use \App\Http\Controllers\UserController;

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

Route::get('/', [ThingController::class, 'index'])->name('index')->middleware('auth');
Route::get('/{id}/show', [ThingController::class, 'show'])->name('show')->middleware('auth');
Route::get('/add', [ThingController::class, 'add'])->name('add')->middleware('auth');
Route::post('/add', [ThingController::class, 'create'])->middleware('auth');
Route::get('/{id}/edit', [ThingController::class, 'edit'])->name('edit')->middleware('auth')->middleware('user');
Route::post('/{id}/edit', [ThingController::class, 'update'])->middleware('user');
Route::get('/{id}/delete', [ThingController::class, 'delete'])->name('delete')->middleware('auth')->middleware('user');
Route::post('/{id}/delete', [ThingController::class, 'remove'])->middleware('auth')->middleware('user');

Route::get('/user/{id}',[UserController::class,'index'])->name('user.index')->middleware('auth');


Route::get('/logout', function () {
    Auth::logout();
    return redirect(route('login'));
})->name('logout');

Route::middleware(['auth:sanctum', 'verified'])->get('/', [ThingController::class, 'index'])->name('index');;
