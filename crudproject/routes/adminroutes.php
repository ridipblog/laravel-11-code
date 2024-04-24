<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

// ----------------- admin login -----------------
Route::get('/admin-login',[AdminController::class,'login']);
// ----------------- admin login post -----------------
Route::post('/admin-login',[AdminController::class,'loginPost']);
// ------------ admin dashboard ----------------
Route::get('/admin-dash',[AdminController::class, 'dash']);
// --------------- admin logout ----------------
Route::get('/admin-logout',[AdminController::class,'logout']);
// ---------------- admin update bank name --------------
Route::post('/admin-bank-name',[AdminController::class, 'bankName']);
// -------------- admin update account no ------------
Route::post('/admin-update-account',[AdminController::class, 'accountNo']);
