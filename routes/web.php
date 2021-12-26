<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;
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

Route::get('/',[TemplateController::class,'index']);
Route::get('about',[TemplateController::class,'about']);
Route::get('trainers',[TemplateController::class,'trainer']);
Route::get('login',[TemplateController::class,'login'])->name('login');
Route::post('check_auth',[TemplateController::class,'customLogin'])->name('check_auth');
Route::get('dashboard',[TemplateController::class,'dashboard']);
Route::get('registration', [TemplateController::class, 'registration'])->name('register');
Route::post('post-registration', [TemplateController::class, 'postRegistration'])->name('register.post'); 
Route::get('test',[TemplateController::class, 'test']);


