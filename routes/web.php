<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\PagesController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/roles', [PagesController::class, 'roles'])->name('roles');
Route::get('/role', [RoleController::class, 'add-role'])->name('add-roles');


Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/map', [MapController::class, 'index']);
Route::get('/get-lga-data', [MapController::class, 'getLgaData']);