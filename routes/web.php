<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeControl;
use App\Http\Controllers\adminControl;
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

Route::get('/',[homeControl::class,"index"]);

Route::get("/redirect",[homeControl::class,"redirectFunct"]);

Route::get('/projectdetail',[homeControl::class,"detail"]);

Route::POST("pdetail",[homeControl::class,'pdetail']);

Route::get('updateleader/{id}',[homeControl::class,'updatedetails']);

Route::get("view/{id}",[homeControl::class,'view']);

Route::POST("edit",[homeControl::class,'updatepdetails']);

/* ========================= adminControl ============================ */
Route::get("/createproject",[adminControl::class,"createpage"]);

Route::get("/manageproject",[adminControl::class,"manageproject"]);

Route::get("/viewpdetail",[adminControl::class,"viewproject"]);

Route::POST("create",[adminControl::class,'create']);

Route::get("editproject/{id}",[adminControl::class,'editproj']);

Route::POST("editproj",[adminControl::class,'updateproj']);

Route::get("del/{id}",[adminControl::class,'deleteproj']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

