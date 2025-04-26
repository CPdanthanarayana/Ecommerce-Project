<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

route::get('/',[HomeController::class, 'home']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

route::get('admin/dashboard', [HomeController::class, 'index'])->
    middleware(['auth', 'admin']);

route::get('view_category', [AdminController::class, 'view_category'])->
    middleware(['auth', 'admin']);

route::post('add_category', [AdminController::class, 'add_category'])->
    middleware(['auth', 'admin']);

route::get('delete_category/{id}', [AdminController::class, 'delete_category'])->
    middleware(['auth', 'admin']);    