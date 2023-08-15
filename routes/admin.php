<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminAuthController;


// AdminController 
Route::get('admin',[AdminController::class ,'dashboard'])->name('dashboard');

// AdminAuthController
Route::get('admin/registrion',[AdminAuthController::class,'create_registrion'])->name('admin.create_registrion');
Route::post("admin/post_registre",[AdminAuthController::class,'registrion'])->name('admin.registrion');
Route::get('admin/login',[AdminAuthController::class ,'create_login'])->name('admin.create_login');
Route::post('admin/post_login',[AdminAuthController::class,'login'])->name('admin.login');
Route::get('admin/logout',[AdminAuthController::class ,'logout'])->name('admin.logout');