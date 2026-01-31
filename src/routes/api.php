<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\BookController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\LoanController;

/*
|--------------------------------------------------------------------------
| Public API Routes
|--------------------------------------------------------------------------
| API digunakan oleh client (frontend / mobile)
| Sistem Manajemen Perpustakaan Digital
| Laravel Filament
*/

// ===== AUTH =====
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

// ===== BOOK / DIGITAL COLLECTION =====
Route::get('/books', [BookController::class, 'index']);        // list buku
Route::post('/books', [BookController::class, 'store']);       // tambah buku
Route::get('/books/{book}', [BookController::class, 'show']);  // detail
Route::put('/books/{book}', [BookController::class, 'update']);
Route::delete('/books/{book}', [BookController::class, 'destroy']);

// ===== CATEGORY =====
Route::get('/categories', [CategoryController::class, 'index']);
Route::post('/categories', [CategoryController::class, 'store']);
Route::put('/categories/{category}', [CategoryController::class, 'update']);
Route::delete('/categories/{category}', [CategoryController::class, 'destroy']);

// ===== USER MANAGEMENT =====
Route::get('/users', [UserController::class, 'index']);
Route::post('/users', [UserController::class, 'store']);
Route::put('/users/{user}', [UserController::class, 'update']);
Route::delete('/users/{user}', [UserController::class, 'destroy']);

// ===== LOAN / PEMINJAMAN =====
Route::get('/loans', [LoanController::class, 'index']);
Route::post('/loans', [LoanController::class, 'store']);
Route::put('/loans/{loan}/return', [LoanController::class, 'returnBook']);

// ===== TEST API =====
Route::get('/', function () {
    return response()->json([
        'status' => 'success',
        'message' => 'Library API is working properly'
    ]);
});
