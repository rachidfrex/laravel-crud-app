<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', [ContactController::class,'index']);

Route::get('/addnew', [ContactController::class, 'addnew_function']);
Route::post('/addnew/traitement', [ContactController::class, 'addnew_function_traitement']);
Route::get('/delete/{id}', [ContactController::class , 'delete_function']);


