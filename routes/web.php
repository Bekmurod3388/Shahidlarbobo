<?php

use App\Http\Controllers\PostController;
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
    return view('index');
});


Auth::routes([
    'confirm' => false,
    'login' => true,
    'logout' => true,
    'register' => false,
    'reset' => false,
    'verify' => false
]);


Route::prefix('admin')->name('admin.')->middleware(['web', 'auth'])->group(function () {
    Route::resource('posts', PostController::class);
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
Route::get('/', function (){
    return redirect('index');
});

