<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'welcomee']);

Route::get('/about', [HomeController::class, 'welcome'])->name('about');

Route::post('/submit', [HomeController::class, 'home'])->name('submit.form');

Route::delete('/quicktips/delete/{id}',[HomeController::class, 'delete'])->name('quicktips.delete');
// Route::delete('/quicktips/delete/{id}', 'QuickTipsController@delete')->name('quicktips.delete');
Route::get('/items/{id}', [HomeController::class, 'delete'])->name('item.show');

