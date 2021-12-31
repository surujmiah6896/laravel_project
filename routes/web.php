<?php

use App\Http\Controllers\CatagoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SubCategoryController;
use App\Models\SubCategory;
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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/home',[HomeController::class,'index'])->name('home');
Route::get('/profile',[HomeController::class, 'profile'])->name('profile');
Route::post('/update_profile',[HomeController::class, 'update_profile'])->name('update_profile');
Route::post('/change/password',[HomeController::class, 'change_password'])->name('change.password');


Route::get('/dashboard_master',[HomeController::class,'dashboard_master'])->name('dashboard_master');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('catagory',CatagoryController::class);
Route::resource('subcategory',SubCategoryController::class);
Route::get('/restore/{id}',[CatagoryController::class,'restore'])->name('category.restore');
Route::get('/forcedelete/{id}',[CatagoryController::class, 'forcedelete'])->name('category.forcedelete');
