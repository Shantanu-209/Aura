<?php
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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

Route::get('/', function () {
    return view('welcome');
});

route::get('/account/login',action: [LoginController::class,'index'])->name('account.login');
route::post('/account/authenticate',action: [LoginController::class,'authenticate'])->name('account.authenticate');
route::get('/account/dashboard',action: [DashboardController::class,'index'])->name('account.dashboard');

