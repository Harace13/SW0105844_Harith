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

/* ========================= adminControl ============================ */
Route::get("/createproject",[adminControl::class,"createpage"]);

Route::get("/manageproject",[adminControl::class,"managepage"]);

Route::get("/list",[adminControl::class,"show"]);

Route::POST("create",[adminControl::class,'create']);

Route::get('del/{pmID}',[adminControl::class,'deleteproj']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

