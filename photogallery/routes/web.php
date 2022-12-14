<?php

use App\Http\Controllers\AlbumsController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Album;

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
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/user', function(){
   return User::with('albums')->paginate(80);
});

Route::resource('albums', \App\Http\Controllers\AlbumsController::class);
Route::delete('/albums/{album}/delete', [AlbumsController::class, 'delete']);

