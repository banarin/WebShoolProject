<?php

use App\Http\Controllers\AddController;
use App\Http\Controllers\StudentController;
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

Route::get('/', [AddController::class, 'home'])->name('ScreenPage');
Route::post('/formulat', [AddController::class, 'valid'])->name('');
Route::get('/inform', [AddController::class, 'direct'])->name('inform');
Route::post('/studentIAI', [StudentController::class, 'add']);
Route::get('/inform/{datas}', [AddController::class, 'show']);
Route::get('/inform/{datas}/edit', [AddController::class, 'edit']);
Route::put('/inform/{datas}/update', [AddController::class, 'update']);