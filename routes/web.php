<?php

use App\Http\Controllers\AcademicSettingController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;


// Route::get('/', function () {
//     return view('sikhi');
// });

Route::group(['prefix'=>'admin'],function(){
    Route::group(['middlware'=>'guest'],function(){
        Route::get('/login',[AdminAuthController::class,'login'])->name('admin.login');
        Route::post('/login',[AdminAuthController::class,'process'])->name('admin.process');
    });
    
});

Route::group(['middleware'=>'auth'],function(){
    Route::get('/dashboard',[HomeController::class,'index'])->name('dashboard');
    Route::get('/academics/settings',[AcademicSettingController::class,'index']);
});
