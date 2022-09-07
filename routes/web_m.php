<?php

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



Route::get('/item', [App\Http\Controllers\ItemController::class, 'index']);

Route::get('item/register',[App\Http\Controllers\ItemController::class, 'register']);

Route::post('item/register',[App\Http\Controllers\ItemController::class, 'itemRegister']);

Route::get('item/edit/{id}', [App\Http\Controllers\ItemController::class, 'edit']);

Route::post('item/edit/{id}',[App\Http\Controllers\ItemController::class, 'itemEdit']);