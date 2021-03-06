<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\BlogController::class, 'index']);
Route::get('/blog/{id}',[App\Http\Controllers\BlogController::class, 'show']);

Route::group(['middleware' => ['auth','admin']], function() {
    
    Route::get('/dashboard', [App\Http\Controllers\AdminController::class,'index'])->name('dashboard');

    Route::get('/blog-create',[App\Http\Controllers\AdminController::class,'createBlog']);
    Route::post('/blog-store',[App\Http\Controllers\AdminController::class,'storeBlog']);
    Route::get('/edit-blog/{id}',[App\Http\Controllers\AdminController::class,'editBlog']);
    Route::put('/update-blog/{id}',[App\Http\Controllers\AdminController::class,'updateBlog']);
    Route::delete('/delete-blog/{id}',[App\Http\Controllers\AdminController::class,'deleteBlog']);
});



