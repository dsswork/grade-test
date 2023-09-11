<?php

use App\Http\Controllers\Web as Web;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'books');

Route::group(['as' => 'web.'], function () {
    Route::resource('/books', Web\BookController::class, ['only' => ['index', 'create', 'store']]);
    Route::get('/api-docs', [Web\ApiController::class, 'index'])->name('api-docs.index');
});
