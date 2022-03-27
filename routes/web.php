<?php

use App\Models\Category;
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotifController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminBarayaController;
use App\Http\Controllers\AdminJackalController;
use App\Http\Controllers\AdminLintasController;
use App\Http\Controllers\AdminDaytransController;
use App\Http\Controllers\DashboardNotifController;
use App\Http\Controllers\SAdminAplikasiController;

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

Route::get('/', function () {
    return view('home',[
        'title' => 'Home'
    ]);
});

Route::get('/about', function (){
    return view('about', [
        'title' => 'About',
        'name' => 'Tiketux Notification',
        'email' => 'info@tiketux.com',
        'image' => 'logos.png'
    ]);
});  

Route::get('/notifs', [NotifController::class, 'index']);

// Halaman single notif
Route::get('notifs/{notif:slug}', [NotifController::class, 'show']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/notifs/checkSlug', [DashboardNotifController::class, 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/notifs', DashboardNotifController::class)->middleware('admin');

Route::resource('/dashboard/daytrans', AdminDaytransController::class)->except('show')->middleware('admin');

Route::resource('/dashboard/jackal', AdminJackalController::class)->except('show')->middleware('admin');

Route::resource('/dashboard/lintas', AdminLintasController::class)->middleware('admin');

Route::resource('/dashboard/baraya', AdminBarayaController::class)->middleware('admin');

Route::resource('/dashboard/addaplikasi', SAdminAplikasiController::class)->middleware('admin');

Route::group(['middleware' => ['role:super-admin|writer']], function(){

});

// di bikin route 1 1

