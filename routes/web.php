<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\ServicesController;

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

Route::get('/', [Controller::class, 'welcome']);
Route::get('/signin', function () {
    return view('signin');
});

Route::post('/mail', [Controller::class, 'sendmail']);
Route::post('/validate', [Controller::class, 'validate']);

Route::resource('information', InformationController::class);
Route::resource('services', ServicesController::class);
