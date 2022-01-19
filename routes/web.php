<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\DashboardController;
use \App\Http\Controllers\KelasController;
use \App\Http\Controllers\ProgramController;
use \App\Http\Controllers\TahunajarController;
use \App\Http\Controllers\JenpemController;
use \App\Http\Controllers\WaliController;
use \App\Http\Controllers\PegawaiController;
use \App\Http\Controllers\PesertaController;
use \App\Http\Controllers\PesertalulusController;
use \App\Http\Controllers\PemesananController;
use \App\Http\Controllers\PertemuanController;
use \App\Http\Controllers\PembayaranController;
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
    return view('pages.body');
});
Route::get('/dashboard', [DashboardController::class,'index']);

Route::get('/kelas', [KelasController::class,'index']);
Route::get('/kelas/tambah/', [KelasController::class,'create']);
Route::get('/kelas/simpan/', [KelasController::class,'store']);
Route::get('/kelas/edit/{id}', [KelasController::class,'edit']);
Route::post('/kelas/update/', [KelasController::class,'update']);
Route::get('/kelas/hapus/{id}', [KelasController::class, 'destroy']);


Route::get('/program', [ProgramController::class,'index']);
Route::get('/program/tambah/', [ProgramController::class,'create']);
Route::get('/program/simpan/', [ProgramController::class,'store']);
Route::get('/program/edit/{id}', [ProgramController::class,'edit']);
Route::post('/program/update/', [ProgramController::class,'update']);
Route::get('/program/hapus/{id}', [ProgramController::class, 'destroy']);

Route::get('/tahunajar', [TahunajarController::class,'index']);
Route::get('/tahunajar/tambah/', [TahunajarController::class,'create']);
Route::get('/tahunajar/simpan/', [TahunajarController::class,'store']);
Route::get('/tahunajar/edit/{id}', [TahunajarController::class,'edit']);
Route::post('/tahunajar/update/', [TahunajarController::class,'update']);
Route::get('/tahunajar/hapus/{id}', [TahunajarController::class, 'destroy']);

Route::get('/jenpem', [JenpemController::class,'index']);
Route::get('/jenpem/tambah/', [JenpemController::class,'create']);
Route::get('/jenpem/simpan/', [JenpemController::class,'store']);
Route::get('/jenpem/edit/{id}', [JenpemController::class,'edit']);
Route::post('/jenpem/update/', [JenpemController::class,'update']);
Route::get('/jenpem/hapus/{id}', [JenpemController::class, 'destroy']);

Route::get('/wali', [WaliController::class,'index']);
Route::get('/wali/tambah/', [WaliController::class,'create']);
Route::get('/wali/simpan/', [WaliController::class,'store']);
Route::get('/wali/edit/{id}', [WaliController::class,'edit']);
Route::post('/wali/update/', [WaliController::class,'update']);
Route::get('/wali/hapus/{id}', [WaliController::class, 'destroy']);

Route::get('/pegawai', [PegawaiController::class,'index']);
Route::get('/pegawai/tambah/', [PegawaiController::class,'create']);
Route::get('/pegawai/simpan/', [PegawaiController::class,'store']);
Route::get('/pegawai/edit/{id}', [PegawaiController::class,'edit']);
Route::post('/pegawai/update/', [PegawaiController::class,'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiController::class, 'destroy']);

Route::get('/peserta', [PesertaController::class,'index']);
Route::get('/peserta/tambah/', [PesertaController::class,'create']);
Route::get('/peserta/simpan/', [PesertaController::class,'store']);
Route::get('/peserta/edit/{id}', [PesertaController::class,'edit']);
Route::post('/peserta/update/', [PesertaController::class,'update']);
Route::get('/peserta/hapus/{id}', [PesertaController::class, 'destroy']);

Route::get('/pesertalulus', [PesertaController::class,'index_tidakaktif']);
// Route::get('/pesertalulus/tambah/', [PesertalulusController::class,'create']);
// Route::get('/pesertalulus/simpan/', [PesertalulusController::class,'store']);
// Route::get('/pesertalulus/edit/{id}', [PesertalulusController::class,'edit']);
// Route::post('/pesertalulus/update/', [PesertalulusController::class,'update']);
// Route::get('/pesertalulus/hapus/{id}', [PesertalulusController::class, 'destroy']);

Route::get('/pemesanan', [PemesananController::class,'index']);
Route::get('/pemesanan/tambah/', [PemesananController::class,'create']);
Route::get('/pemesanan/simpan/', [PemesananController::class,'submit']);
Route::get('/pemesanan/edit/{id}', [PemesananController::class,'edit']);
Route::post('/pemesanan/update/', [PemesananController::class,'update']);
Route::get('/pemesanan/hapus/{id}', [PemesananController::class, 'destroy']);
Route::get('/pemesanan/bayar/{id}', [PemesananController::class, 'bayar']);
Route::get('/pemesanan/batalbayar/{id}', [PemesananController::class, 'batalbayar']);

Route::get('/pertemuan', [PertemuanController::class,'index']);
Route::get('/pertemuan/tambah/', [PertemuanController::class,'create']);
Route::get('/pertemuan/simpan/', [PertemuanController::class,'store']);
Route::get('/pertemuan/edit/{id}', [PertemuanController::class,'edit']);
Route::post('/pertemuan/update/', [PertemuanController::class,'update']);
Route::get('/pertemuan/hapus/{id}', [PertemuanController::class, 'destroy']);

Route::get('/pembayaran', [PembayaranController::class,'index']);
Route::get('/pembayaran_blmlunas', [PembayaranController::class,'index_blmlunas']);
Route::get('/pembayaran/tambah/', [PembayaranController::class,'create']);
Route::get('/pembayaran/simpan/', [PembayaranController::class,'store']);
Route::get('/pembayaran/edit/{id}', [PembayaranController::class,'edit']);
Route::post('/pembayaran/update/', [PembayaranController::class,'update']);
Route::get('/pembayaran/hapus/{id}', [PembayaranController::class, 'destroy']);

