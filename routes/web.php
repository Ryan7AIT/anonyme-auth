<?php

use App\Http\Controllers\BankController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SocietyController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/societies', [SocietyController::class, 'index'])->middleware('auth');
Route::get('/societies/{id}', [SocietyController::class, 'show'])->middleware('auth');

Route::post('/society/{id}', [SocietyController::class, 'store'])->middleware('auth');


Route::get('/messagrie', [MessageController::class, 'index'])->middleware('auth');
Route::post('/messagrie', [MessageController::class, 'store'])->middleware('auth');


Route::get('/messagrie/{id}', [MessageController::class, 'show'])->middleware('auth');


// Route::get('/bank/messagrie', [BankController::class, 'index'])->middleware('auth');
Route::get('/bank/messagrie', [BankController::class, 'index'])->middleware('auth');

Route::get('/bank/messagrie/{id}', [BankController::class, 'show'])->middleware('auth');

Route::post('/bank/messagrie', [BankController::class, 'store'])->middleware('auth');



Route::get('/employee/{id}', [EmployeeController::class, 'show'])->middleware('auth');
Route::get('/society/{id}/employees', [EmployeeController::class, 'create'])->middleware('auth');

Route::post('/society/{id}/employees', [EmployeeController::class, 'store'])->middleware('auth');


Route::get('/bank/reports', [ReportController::class, 'index'])->middleware('auth');

Route::get('/reports/create', [ReportController::class, 'create'])->middleware('auth');
Route::post('/reports', [ReportController::class, 'store'])->middleware('auth');









// Route::get('/faculties', [FacultyController::class, 'index']);
// Route::get('/faculties/{id}', [FacultyController::class, 'show']);
// Route::post('/faculties/{id}', [FacultyController::class, 'store']);
// Route::patch('/faculties/{id}', [FacultyController::class, 'update']);




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
