<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CreateDashboard;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomePagesController;
use App\Http\Controllers\LandingPageColdPlayerController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LandingpagePinkFloydController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });


require __DIR__.'/auth.php';
Route::get('/',[LandingPageController::class,'index'])->middleware('guest');
Route::get('/Login',[LoginController::class,'index'])->name('login');//->middleware('guest');                     
Route::post('/Login',[LoginController::class,'auth'])->name('login');//->middleware('guest');                     
Route::get('/Register',[RegisterController::class,'index']);
Route::post('/Register',[RegisterController::class,'store']);
Route::get('/Dashboard/Createnews',[CreateDashboard::class,'index']);
Route::resource('/homepage',HomePagesController::class)->middleware('auth');
Route::resource('/PinkFloyd',LandingpagePinkFloydController::class)->middleware('auth');
Route::resource('/JustinBieber',LandingPageColdPlayerController::class);
Route::resource('/Category',CategoryController::class)->middleware('auth');
Route::resource('/Dashboard',DashboardController::class)->middleware('auth');
