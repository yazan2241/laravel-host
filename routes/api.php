<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/
//........Admin routes
Route::post('/add_place', [App\Http\Controllers\Admin\AdminController::class,'add_place'])
    ->name('add_place');
//...............................................................
Route::post('/store_image',[App\Http\Controllers\Admin\AdminController::class,'storeImage'])
    ->name('images.store');
//...................................................................
Route::post('/delete_place/{place_id}', [App\Http\Controllers\Admin\AdminController::class,'delete_place'])
    ->name('delete_place');
//........................................................
Route::post('/delete_image/{image_id}', [App\Http\Controllers\Admin\AdminController::class,'delete_image'])
    ->name('delete_image');
//..........................................
Route::get('/get_places', [App\Http\Controllers\Admin\AdminController::class,'get_places'])
    ->name('get_places');
//.........................................
Route::get('/get_place_based_id/{place_id}', [App\Http\Controllers\Admin\AdminController::class,'get_place_based_id'])
    ->name('get_place_based_id');
//..........................................................
Route::get('/get_image/{place_id}', [App\Http\Controllers\Admin\AdminController::class,'get_image'])
    ->name('get_image');
//....................................
Route::get('/get_places_based_category/{category}', [App\Http\Controllers\Admin\AdminController::class,'get_places_based_category'])
    ->name('get_places_based_category');
//..................................................
Route::get('/get_categories', [App\Http\Controllers\Admin\AdminController::class,'get_categories'])
    ->name('get_categories');
