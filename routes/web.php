<?php

use App\Http\Controllers\DepartemenController;
use App\Http\Controllers\DosenwaliController;
use App\Http\Middleware\isOperator;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\Group;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Artisan;

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

Route::get('/',[LoginController::class,'index']);
Route::post('/',[LoginController::class,'authenticate']);

Route::get('/logout',[LoginController::class,'getLogout'])->middleware('guest');

//opt
Route::middleware(['isOperator'])->group(function(){
    Route::get('operator/dashboard_opt',[OperatorController::class, 'index'])-> name('dashboard_opt');
    Route::get('operator/generate',[OperatorController::class, 'generate'])-> name('generate');

    // upload dan import
    Route::post('operator/generate', [OperatorController::class, 'store'])->name('upload');
    Route::post('operator/generate/import', function(){
        Artisan::call('db:seed', ['--class' => 'ImportMhsSeeder']);
        return redirect()->route('generate');
    })->name('import');
});

//mhs
Route::middleware(['isMahasiswa'])->group(function(){
    Route::get('mahasiswa/dashboard_mhs',[MahasiswaController::class, 'index'])-> name('dashboard_mhs');
    Route::get('mahasiswa/update_mhs',[MahasiswaController::class, 'edit'])-> name('update_mhs');

    // getKabupaten
    Route::post('mahasiswa/kabupaten',[MahasiswaController::class, 'getKabupaten'])-> name('getKabupaten');
    Route::put('mahasiswa/update_mhs',[MahasiswaController::class, 'update'])-> name('update_mhs');

    //
    Route::get('mahasiswa/irs',[MahasiswaController::class, 'irs'])-> name('irs');
    Route::get('mahasiswa/khs',[MahasiswaController::class, 'khs'])-> name('khs');
    Route::get('mahasiswa/irs',[MahasiswaController::class, 'pkl'])-> name('pkl');
    Route::get('mahasiswa/irs',[MahasiswaController::class, 'skripsi'])-> name('skripsi');
});


Route::middleware(['isDosenWali'])->group(function(){
    Route::get('dosenwali/dashboard_dsn',[DosenwaliController::class, 'index'])-> name('dashboard_dsn');
});


Route::middleware(['isDepartemen'])->group(function(){
    Route::get('departemen/dashboard_dpt',[DepartemenController::class, 'index'])-> name('dashboard_dpt');
});




