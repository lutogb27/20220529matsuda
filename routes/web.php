<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\RestController;
use App\Http\Controllers\WorkController;

Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);

Route::middleware(['auth'])->group(function(){
  Route::get('/logout', [AuthenticatedSessionController::class, 'destroy']);

  Route::get('/', [WorkController::class, 'index']);  
  Route::post('/work/start', [WorkController::class, 'start']);
  Route::post('/work/end', [WorkController::class, 'end']);

  Route::post('/rest/start', [RestController::class, 'start']);
  Route::post('/rest/end', [RestController::class, 'end']);

  Route::get('/attendance', [AttendanceController::class, 'index']);

});
