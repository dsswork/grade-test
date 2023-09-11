<?php

use App\Http\Controllers\Api as Api;
use Illuminate\Support\Facades\Route;

Route::resource('/books', Api\ApiBookController::class, ['only' => ['index', 'store']]);

