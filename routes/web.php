<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\forms;

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

Route::get('/', [StaticController::class , 'welcome' ] );

Route::get('/create', [StaticController::class , 'create_account' ] );
Route::get('/homepage', [StaticController::class , 'homepage' ] );
Route::get('/login', [StaticController::class , 'login_page' ] );

//forms
Route::post('insert_data', [Forms::class, 'insert_data']);

//login
Route::post('login', [forms::class, 'login']);
