<?php

use App\Http\Controllers\BooksController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
// use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\AdminLoginController;

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
// Route::get('/register', [HomeController::class, 'registerPage'])->name('register');
// Route::get('/login', [HomeController::class, 'loginPage'])->name('login');
// Route::get('/logout', [HomeController::class, 'logout'])->name('signout');
// Route::post('/postlogin', [HomeController::class, 'postlogin'])->name('postlogin');

// Route::get('/', [DashboardController::class, 'dashboardPage'])->name('dashboard');
// Route::middleware(['auth'])->group(function () {
//     Route::get('/blank', [HomeController::class, 'blank_page'])->name('blank_page');
// });

Route::group(['prefix'=>'admin'],function(){

    Route::group(['middleware'=>'admin.auth'],function(){

        Route::get('/dashboard',[HomeController::class,'index'])->name('admin.dashboard');
        Route::get('/blank',[HomeController::class,'blank_page'])->name('admin.blank');
        Route::get('/logout',[HomeController::class,'logout'])->name('admin.logout');

    });

    Route::group(['middleware'=>'admin.guest'],function(){

        Route::get('/',[AdminLoginController::class,'index'])->name('admin.login');
        Route::post('/authenticate',[AdminLoginController::class,'authenticate'])->name('admin.authenticate');

    });

});