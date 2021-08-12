<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MultiUploaderController;
use App\Http\Controllers\SocialShareController;
use App\Http\Controllers\DropzoneController;

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


Route::get('/dropzone', [DropzoneController::class, 'index']);
Route::post('dropzone/store', [DropzoneController::class, 'store']);
Route::post('dropzone_delete', [DropzoneController::class, 'destroy']);

Route::resource('/uploader', MultiUploaderController::class);
Route::delete('uploader_delete/{id}', [MultiUploaderController::class, 'destroy']);
Route::post('/uploader_submit', [MultiUploaderController::class, 'MoveToServer']);


Route::resource('share', SocialShareController::class);
