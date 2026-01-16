<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Home\AboutUsController;
use App\Http\Controllers\Home\AlumniConnectController;
use App\Http\Controllers\Home\AlumniPrivilegesController;
use App\Http\Controllers\Home\ContactController;
use App\Http\Controllers\Home\EventController;
use App\Http\Controllers\Home\NUSTGivingBackController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('event/index', [EventController::class, 'index'])->name('event.index');
Route::get('alumni/privileges/index', [AlumniPrivilegesController::class, 'index'])->name('alumni.privileges.index');
Route::get('nust/giving/back/index', [NUSTGivingBackController::class, 'index'])->name('nust.giving.back.index');
Route::get('alumni/connect/index', [AlumniConnectController::class, 'index'])->name('alumni.connect.index');
Route::get('about/index', [AboutUsController::class, 'index'])->name('about.index');
Route::get('contact/index', [ContactController::class, 'index'])->name('contact.index');

Route::get('register/index', [AuthController::class, 'register'])->name('register.index');