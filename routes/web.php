<?php

use App\Http\Controllers\CareerFormController;
use App\Mail\FormMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::resource('/form',CareerFormController::class);

/*Route::get('/email', function(){
    Mail::to('debo2696@gmail.com')->send(new FormMail());
    return new FormMail();
});*/