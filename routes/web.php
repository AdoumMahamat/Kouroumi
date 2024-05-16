<?php

use App\Http\Controllers\RoleController;
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
    return view('welcome');
});
route::get('/role',[RoleController::class,'index'])->name('role_index');
route::get('/role',[RoleController::class,'store'])->name('role_index');
route::get('/role',[RoleController::class,'edit'])->name('role_index');
//route::get('/role',[RoleController::class,'delete'])->name('role_index');

