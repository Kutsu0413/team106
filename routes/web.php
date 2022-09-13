<?php

use App\Http\Controllers\AccountController;

use App\Http\controllers\UserController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//ログイン画面
Route::get('/', function () {return view('account.login');})->name('login');
//登録画面
Route::get('/register', function () {return view('account.register');})->name('register');
Route::post('/store', [AccountController::class, 'store'])->name('register.user');

//ログイン処理
Route::post('/signin', [AccountController::class, 'postSignin'])->name('login.user');


//アクセス制御
Route::group(['middleware' => ['auth', 'can:admin']], function () {
    Route::get('/admin', function () {return view('account.admin');})->name('admin');
    Route::get('item/register',[App\Http\Controllers\ItemController::class, 'register']);
    Route::post('item/register',[App\Http\Controllers\ItemController::class, 'itemRegister']);
    Route::get('item/edit/{id}', [App\Http\Controllers\ItemController::class, 'edit']);
    Route::post('item/edit/{id}',[App\Http\Controllers\ItemController::class, 'itemEdit']);
});

Route::group(['middleware' => ['auth', 'can:general_user']], function () {
    Route::get('/test', function () {return view('account.test');})->name('test');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
    Route::get('/item', [App\Http\Controllers\ItemController::class, 'index']);
    Route::get('/user',[UserController::class,'index'])->name('posts.index');
});


//村田さん
// Route::get('/item', [App\Http\Controllers\ItemController::class, 'index']);
// Route::get('item/register',[App\Http\Controllers\ItemController::class, 'register']);
// Route::post('item/register',[App\Http\Controllers\ItemController::class, 'itemRegister']);
// Route::get('item/edit/{id}', [App\Http\Controllers\ItemController::class, 'edit']);
// Route::post('item/edit/{id}',[App\Http\Controllers\ItemController::class, 'itemEdit']);

//北田さん
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

//黒島さん
// Route::get('/user',[UserController::class,'index'])->name('posts.index');