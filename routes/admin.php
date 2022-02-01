<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Auth;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

// Route::get("admin" , [DashboardController::class , "index"]);

// Route::resource("/admin/user" , UserController::class);


Route::group(['prefix' => LaravelLocalization::setLocale(),
'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
], function()
{
	Route::middleware(['auth' , 'isAdmin'])->prefix("admin")->group(function(){
        Route::get("/" , [DashboardController::class , 'index']);
        Route::resource("/user" , UserController::class);
        Route::get("/user/{user}/posts" , [UserController::class , "showPosts"])->name('user.showPosts');
        Route::resource("/post" , PostController::class);
    
        // Route::get('current' , function(){
        //     $current = Auth::user();
        //     return response()->json($current);
        // });
    });
});

