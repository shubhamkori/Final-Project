<?php

use App\Http\Controllers\TeetController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\Teet;
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

Route::get('/dashboard', function () {
    return view('dashboard',  [
        'teets' => Teet::latest()->simplePaginate(6)]);
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::middleware(['auth'])->group(function () {

Route::get('tweeter', [UserController::class, 'tweet']);

Route::post('tweeter', [TeetController::class, 'store']);

Route::get('{teet}/edit', [TeetController::class, 'edit']);

Route::put('teet/{teet}', [TeetController::class, 'update']);

Route::delete('{teet}', [TeetController::class, 'destroy']);

Route::get('{teet}', [TeetController::class, 'like']);


});