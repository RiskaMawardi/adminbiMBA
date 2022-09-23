<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PembayaranController;
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
    return view('admin.dashboard');
});


Route::get('/indexPembayaran', [PembayaranController::class, 'index'])->name('indexPayment');
Route::get('/dashboard', [PembayaranController::class, 'dash'])->name('dashboard');
Route::get('/indexPayment', [PembayaranController::class, 'indexPayment'])->name('indexPayment');
Route::get('/indexReportPayment', [PembayaranController::class, 'indexReportPayment'])->name('indexReportPayment');
Route::post('/createPembayaran', [PembayaranController::class, 'create'])->name('createPayment');


Route::get('/layouts', [PembayaranController::class, 'layouts']);