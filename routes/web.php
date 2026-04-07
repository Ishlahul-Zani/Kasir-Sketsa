<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionController;

Route::get('/', function () {
    return redirect('/dashboard');
});

Route::get('/dashboard', [TransactionController::class, 'index']);
Route::post('/dashboard', [TransactionController::class, 'store']);

Route::get('/transaksi', [TransactionController::class, 'transaksi']);
Route::get('/kasir/struk/{id}', [TransactionController::class, 'struk']);
Route::get('/laporan', [TransactionController::class, 'laporan']);
