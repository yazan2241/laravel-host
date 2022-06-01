<?php

use App\Http\Controllers\HomeController;
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
//..............................................................
Route::get('/', function () {
    return view('welcome');
});
//..............................................................
Route::get('/home',[HomeController::class,'myredirect']);
Route::get('/ShowAllImages',[HomeController::class,'ShowAllImages']);
//..............................................................
Route::get('/add_places_view',[HomeController::class,'addPlacesView']);
//.............................................................. Add_Images_view
Route::get('/ShowImagesView/{id}',[HomeController::class,'ShowImagesView']);
//.............................................................................
Route::get('/Show_places_view',[HomeController::class,'ShowPlacesView']);
//...............................................................................
Route::get('/DeletePlace/{id}',[HomeController::class,'DeletePlace']);
Route::get('/DeleteImage/{id}',[HomeController::class,'DeleteImage']);
//..............................................................
Route::get('/UpdatePlace/{id}',[HomeController::class,'UpdatePlace']);
//...................................................................
Route::get('/AddNewImageView/{id}',[HomeController::class,'AddNewImageView']);
//.............................................................................
Route::post('/EditPlace/{id}',[HomeController::class,'EditPlace']);
//................................................................
Route::post('/UploadImage',[HomeController::class,'UploadImage']);
//...............................................................................
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
//..........forms routes
Route::post('/add_place', [App\Http\Controllers\Admin\AdminController::class,'add_place'])
    ->name('add_place');
//..............................................................
