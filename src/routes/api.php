<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\SubmissionController;
use App\Http\Controllers\Api\ApprovalController;
use App\Http\Controllers\Api\ScheduleController;
use App\Http\Controllers\Api\NotificationController;

/*
|--------------------------------------------------------------------------
| Public API Routes
|--------------------------------------------------------------------------
| API digunakan oleh frontend / mobile app
| Sistem Perencanaan Sidang Skripsi + TTE
*/

// ===== AUTH =====
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

// ===== SUBMISSION (MAHASISWA) =====
Route::get('/submissions', [SubmissionController::class, 'index']);     // list pengajuan
Route::post('/submissions', [SubmissionController::class, 'store']);    // ajukan sidang
Route::get('/submissions/{id}', [SubmissionController::class, 'show']); // detail
Route::delete('/submissions/{id}', [SubmissionController::class, 'destroy']);

// ===== APPROVAL + TTE (DOSEN & KAPRODI) =====
Route::get('/approvals', [ApprovalController::class, 'index']);         
Route::post('/approvals/{id}/approve', [ApprovalController::class, 'approve']);
Route::post('/approvals/{id}/reject', [ApprovalController::class, 'reject']);

// ===== SCHEDULE (ADMIN) =====
Route::get('/schedules', [ScheduleController::class, 'index']);
Route::post('/schedules', [ScheduleController::class, 'store']);
Route::put('/schedules/{id}', [ScheduleController::class, 'update']);
Route::delete('/schedules/{id}', [ScheduleController::class, 'destroy']);

// ===== NOTIFICATION =====
Route::get('/notifications', [NotificationController::class, 'index']);

// ===== TEST API =====
Route::get('/', function () {
    return response()->json([
        'status' => 'success',
        'message' => 'API Sidang Skripsi is running'
    ]);
});
