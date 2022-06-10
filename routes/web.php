<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Fontend\HomeController;
use App\Http\Controllers\Fontend\AboutController;
use App\Http\Controllers\Fontend\ProductsController;
use App\Http\Controllers\Fontend\TestimonialController;
use App\Http\Controllers\Fontend\WhyController;


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

Route::get('/',[HomeController::class, 'index']);

Route::get('/about',[AboutController::class, 'index']);

Route::get('/product',[ProductsController::class, 'index']);

Route::get('/testimonial',[TestimonialController::class, 'index']);

Route::get('/why',[WhyController::class, 'index']);
