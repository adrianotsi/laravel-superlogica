<?php

use App\Http\Controllers\ArrayController;
use App\Http\Controllers\UserControler;
use App\Http\Controllers\UsuarioController;
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

Route::prefix('user')->group(function () {
    Route::get('', [UserControler::class, 'index'])->name('user.index');
    Route::get('/list', [UserControler::class, 'findAll'])->name('user.list');
    Route::get('/edit/{id}', [UserControler::class, 'findById'])->name('user.view');
    Route::post('/new', [UserControler::class, 'store'])->name('user.store');
    Route::post('/edit', [UserControler::class, 'update'])->name('user.edit');
    Route::get('/delete/{id}', [UserControler::class, 'delete'])->name('user.delete');

});

Route::get('/array', [ArrayController::class, 'index'])->name('array.view');

Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usuarios.view');

Route::get('/', function () {
    return view('welcome');
});
