<?php

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
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->group(function(){

   Route::get('/dashboard',[App\Http\Controllers\Admin\DashboardController::class, 'index']);

   Route::get('category',[App\Http\Controllers\Admin\CategoryController::class,'index']);
   Route::get('add-category',[App\Http\Controllers\Admin\CategoryController::class,'create']);
   Route::post('add-category',[App\Http\Controllers\Admin\CategoryController::class,'store']);
   Route::get('edit-category/{category_id}',[App\Http\Controllers\Admin\CategoryController::class,'edit']);
   Route::put('update-category/{category_id}',[App\Http\Controllers\Admin\CategoryController::class,'update']);
   Route::get('delete-category/{category_id}',[App\Http\Controllers\Admin\CategoryController::class,'destroy']);


   Route::get('image',[App\Http\Controllers\Admin\ImageController::class,'index']);
   Route::get('add-image',[App\Http\Controllers\Admin\ImageController::class,'create']);
   Route::post('add-image',[App\Http\Controllers\Admin\ImageController::class,'store']);
   Route::get('edit-image/{image_id}',[App\Http\Controllers\Admin\ImageController::class,'edit']);
   Route::put('update-image/{image_id}',[App\Http\Controllers\Admin\ImageController::class,'update']);
   Route::get('delete-image/{image_id}',[App\Http\Controllers\Admin\ImageController::class,'destroy']);

   Route::get('page',[App\Http\Controllers\Admin\PageController::class,'index']);
   Route::get('add-page',[App\Http\Controllers\Admin\PageController::class,'create']);
   Route::post('add-page',[App\Http\Controllers\Admin\PageController::class,'store']);
   Route::get('page/{page_id}',[App\Http\Controllers\Admin\PageController::class,'edit']);
   Route::put('update-page/{page_id}',[App\Http\Controllers\Admin\PageController::class,'update']);
   Route::get('update-page/{page_id}',[App\Http\Controllers\Admin\PageController::class,'destroy']);

   Route::get('widget',[App\Http\Controllers\Admin\WidgetController::class,'index']);
   Route::get('add-widget',[App\Http\Controllers\Admin\WidgetController::class,'create']);
   Route::post('add-widget',[App\Http\Controllers\Admin\WidgetController::class,'store']);
   Route::get('widget/{widget_id}',[App\Http\Controllers\Admin\WidgetController::class,'edit']);
   Route::put('update-widget/{widget_id}',[App\Http\Controllers\Admin\WidgetController::class,'update']);
   Route::get('update-widget/{widget_id}',[App\Http\Controllers\Admin\WidgetController::class,'destroy']);


});