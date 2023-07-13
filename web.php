<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\DocumentController;

Route::get('/', [DocumentController::class, 'index'])->name('index');

Route::get('links', [LinkController::class, 'index'])->name('links');
Route::get('links/{place}', [LinkController::class, 'show'])->name('links.show');

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

// Route::resource('places/{place}/comments', CommentController::class)->only([
//     'index', 'show',
// ]);
