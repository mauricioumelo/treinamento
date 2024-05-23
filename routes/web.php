<?php

use App\Http\Controllers\CategoryController;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::prefix('/app')->name('app.')->group(function () {
    Route::prefix('/categories')->name('categories.')->group(function () {
        Route::controller(CategoryController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{category}', 'edit')->name('edit');

            Route::get('/delete', function () {
                dd("Categories deletar...");
            })->name('delete');
        });

    });
});
