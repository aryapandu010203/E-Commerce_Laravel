<?php

use App\Http\Controller\CategoryController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route :: group([
    'middleware' => 'api',
    'prefix' => 'auth'
],function(){
    Route :: post('login',[AuthController :: class,'login']) -> name('login');
});

// Router::group ([
//     'middleware' => 'api'
// ],function(){
//     Route::resources(CategoryController :: class);
// });


