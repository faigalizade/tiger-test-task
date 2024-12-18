<?php

use App\Http\Controllers\PostBackController;
use Illuminate\Support\Facades\Route;

Route::any("/postback/{action}", PostBackController::class)->whereIn('action', [
    'getNumber',
    'getSms',
    'cancelNumber',
    'getStatus'
]);
