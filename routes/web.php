<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/create',[PostController::class ,'create']);
Route::post('/postsstor',[PostController::class ,'stor'])->name('postsstor');
Route::get('/postsinsert',[PostController::class ,'insert'])->name('postsinsert');
Route::get('/postedit/{id}',[PostController::class ,'edit'])->name('postedit');
Route::post('/postupdate/{id}',[PostController::class ,'update'])->name('postupdate');
Route::get('/postdelete/{id}',[PostController::class ,'delete'])->name('postdelete');

Route::get('/softdelete',[PostController::class ,'showdeleted'])->name('softdelete');

Route::get('/restore/{id}',[PostController::class ,'restore'])->name('restore');

Route::get('/forcedelete/{id}',[PostController::class ,'forcedelete'])->name('forcedelete');
