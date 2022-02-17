<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CatagoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FrontedController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\VariationController;
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

Route::get('/', [FrontedController::class,'index'])->name('fronted_home');
Route::get('/shop/left/sidebar', [FrontedController::class, 'shop_left_sidebar'])->name('frontend.shop_left_sidebar');
Route::get('/about_us', [FrontedController::class, 'about_us'])->name('frontend.about_us');
Route::get('/pruduct/details/{slug}', [FrontedController::class, 'pruductdetails'])->name('frontend.pruduct_details');
Route::post('/get/sizes', [FrontedController::class, 'getsizes'])->name('get.sizes');
Route::post('/get/products', [FrontedController::class, 'getproducts'])->name('get.products');

Route::get('/home_us',[HomeController::class,'index'])->name('home');
Route::get('/profile',[HomeController::class, 'profile'])->name('profile');
Route::post('/update_profile',[HomeController::class, 'update_profile'])->name('update_profile');
Route::post('/change/password',[HomeController::class, 'change_password'])->name('change.password');


Route::get('/dashboard_master',[HomeController::class,'dashboard_master'])->name('dashboard_master');

Auth::routes(['login' => false]);
Route::get('/admin/login', [LoginController::class , 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);

Route::get('login',[CustomerController::class,'customerlogin'])->name('customerlogin');
Route::post('customer/register',[CustomerController::class, 'customerregister'])->name('customer.register');
Route::get('customer/dashboard',[CustomerController::class, 'customerdashboard'])->name('customer.dashboard');
Route::get('customer/cart',[CustomerController::class, 'customercart'])->name('customer.cart');

//cart
Route::post('/insert/cart',[CartController::class, 'insertcart'])->name('insert.cart');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('catagory',CatagoryController::class);
Route::resource('subcategory',SubCategoryController::class);
Route::resource('slider', SliderController::class);
Route::resource('product',ProductController::class);
Route::resource('variation',VariationController::class);
Route::post('/add/size',[VariationController::class, 'addsize'])->name('add.size');
Route::get('/delete/size/{id}',[VariationController::class, 'deletesize'])->name('delete.size');

Route::get('/add/featured/photos/{id}',[ProductController::class, 'addfeaturedphotos'])->name('add.featuredphotos');
Route::post('/add/featured/photos/{id}',[ProductController::class, 'addfeaturedphotospost'])->name('add.featuredphotos.post');
Route::get('/delete/featured/photos/{id}',[ProductController::class, 'deletefeaturedphotos'])->name('delete.featuredphotos');
Route::post('/get/subcategories',[ProductController::class, 'getsubcategories'])->name('get.subcategories');
Route::get('/add/inventory/{product_id}',[ProductController::class, 'addinventory'])->name('add.inventory');
Route::post('/add/inventory/post{product_id}',[ProductController::class, 'addinventorypost'])->name('add.inventory.post');


Route::get('/restore/{id}',[CatagoryController::class,'restore'])->name('category.restore');
Route::get('/forcedelete/{id}',[CatagoryController::class, 'forcedelete'])->name('category.forcedelete');


