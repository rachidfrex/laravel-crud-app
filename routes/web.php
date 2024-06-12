<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CompaniesConroller;

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

Route::get('/home', function () {
    return response('Hello World', 404)
                  ->header('Content-Type', 'text/plain');
});
Route::get('/', [ContactController::class,'index']);

Route::get('/addnew', [ContactController::class, 'addnew_function']);
Route::post('/addnew/traitement', [ContactController::class, 'addnew_function_traitement']);
Route::get('/viewprofil/{id}', [ContactController::class, 'viewprofil_function']);
Route::get('/update/{id}', [ContactController::class, 'update_function']);
Route::post('/update/traitement/', [ContactController::class, 'update_function_traitement']);


Route::get('/delete/{id}', [ContactController::class , 'delete_function']);

// companies routes 
Route::get('/companies', CompaniesConroller::class . 'companies_ function');
Route::get('/viewcompanies/{id}', [CompaniesConroller::class, 'viewcompanies_function']);

Route::get('/deleteCom/{id}', [CompaniesConroller::class , 'delete_function']);

Route::get('/addnewComp', [CompaniesConroller::class, 'addnewComp_function']);
Route::post('/addnewComp/traitement', [CompaniesConroller::class, 'addnewComp_function_traitement']);

Route::view('/login', 'login');

