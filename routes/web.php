<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TrackController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [HomeController::class, 'index']);



Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'admin'])->controller(AdminController::class)->group(function () {
    Route::get('/dashboard', 'dashboardIndex')->name('dashboard');
    Route::get('/rendermap', 'renderMap')->name('render');

    Route::get('/ikon/{id}', 'ikon')->name('ikon');
    Route::get('/view/{id}', 'viewUser')->name('viewUser');
    Route::get('/user/list', 'userList')->name('user_render');
    Route::get('/user', 'userIndex')->name('user');

    Route::post('/new/user', 'newUser')->name('NewUser');
    Route::get('/edit/user/{id}', 'editUser')->name('EditUser');
    Route::patch('/update/user/{id}' . 'updateuser')->name('UpdateUser');
    Route::get('/delete/user/{id}', 'deleteuser')->name('deleteUser');

    Route::get('/test', 'log');
});

// Route::middleware(['auth', 'user'])->controller(TrackController::class)->group(function () {
//     Route::get('/track', 'trackIndex')->name('track');
//     Route::patch('/track/user/{id}', 'update')->name('TrackUser');
// });
