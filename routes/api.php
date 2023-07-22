<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('karyawan/new', [KaryawanController::class, 'latest']);
Route::get('karyawan/cuti', [KaryawanController::class, 'karyawanWithCuti']);
Route::get('karyawan/cuti/remaining', [KaryawanController::class, 'karyawanWithRemainingCuti']);
Route::apiResource('karyawan', KaryawanController::class);
