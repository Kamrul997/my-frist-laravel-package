<?php

use Crud\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => '/mypackage', 'middleware' => ['web']], function ()
{
    Route::get('/index', [HomeController::class, 'index'])->name('crud.index');
    Route::get('/create', [HomeController::class, 'create'])->name('crud.create');
    Route::post('/store', [HomeController::class, 'store'])->name('crud.store');
    Route::get('/edit/{id}', [HomeController::class, 'edit'])->name('crud.edit');
    Route::post('/update/{id}', [HomeController::class, 'update'])->name('crud.update');
    Route::get('/delete/{id}', [HomeController::class, 'delete'])->name('crud.delete');
});
