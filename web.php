<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\DocPlController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\RegisterController;

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

// Route::view('/', 'home.index')->name('home');

Route::get('/', [DocumentController::class, 'index'])->name('index');


// Route::get('/', [LinkController::class, 'index'])->name('home');

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'store'])->name('login.store');

Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::post('register', [RegisterController::class, 'store'])->name('register.store');

Route::get('links', [LinkController::class, 'index'])->name('links');
Route::get('links/{place}', [LinkController::class, 'show'])->name('links.show');
Route::post('links/{place}/like', [LinkController::class, 'like'])->name('links.like');

Route::resource('places/{place}/comments', CommentController::class)->only([
    'index', 'show',
]);

//Route::get('/test', TestController::class)->name('test')->middleware('token:secret');
Route::get('/test', TestController::class)->name('test');


// Route::resource('places/{place}/documents', DocumentController::class)->only([
//     'show',
// ]);

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/home/create', [HomeController::class, 'create'])->name('document.create');
Route::post('/home', [HomeController::class, 'store'])->name('document.store');
Route::get('/home/{document}/edit', [HomeController::class, 'edit'])->name('document.edit')
 ->middleware('can:update,document');
Route::patch('/home/{document}', [HomeController::class, 'update'])->name('document.update')
 ->middleware('can:update,document');
Route::get('/home/{document}/delete', [HomeController::class, 'delete'])->name('document.delete')
 ->middleware('can:destroy,document');
Route::delete('/home/{document}', [HomeController::class, 'destroy'])->name('document.destroy')
 ->middleware('can:destroy,document');

Route::get('/{document}', [DocumentController::class, 'detail'])->name('detail');
Route::get('/places/{place}', [DocPlController::class, 'index'])->name('place');

// Route::get('get-places/{id}', [DocPlController::class, 'getPlaces']);
// Route::get('get-documents/{id}', [DocPlController::class, 'getDocuments']);