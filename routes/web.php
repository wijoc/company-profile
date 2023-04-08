<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InboxController;
use App\Http\Controllers\ContactController;

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
    return view('visitor/home');
});

Route::group(['prefix' =>'/admin'], function () {
    Route::get('/', function () {
        return view('admin/dashboard');
    });
    Route::get('/inbox', function () {
        return view('admin/inbox');
    });
    Route::get('/inbox/{id}', function () {
        return view('admin/detail-inbox');
    });
    Route::get('/services', function () {
        return view('admin/service');
    });
    Route::get('/portfolio', function () {
        return view('admin/potfolio');
    });
    Route::get('/contact', function () {
        return view('admin/contact');
    });
});

Route::group(['prefix' => 'ajax', 'controller' => InboxController::class], function () {
    Route::post('/message', 'store');
    Route::get('/inbox', 'index');
    Route::get('/inbox/{id}', 'show');
    Route::delete('/inbox/{id}', 'destroy');
});

Route::group(['prefix' => 'ajax', 'controller' => ContactController::class], function () {
    Route::get('/contact', 'index');
    Route::post('/contact', 'update');
});
