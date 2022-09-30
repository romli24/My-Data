<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataRekapController;
use App\Http\Controllers\DataBarangController;
use App\Http\Controllers\DataPemesanController;
use App\Http\Controllers\LoginRegisterController;
use App\Http\Controllers\DataKeuntunganController;
use App\Http\Controllers\DataSupplierController;
use Faker\Guesser\Name;

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

Route::get('/login', [LoginRegisterController::class, 'login'])->name('login');

//login-register-logout//
Route::group(['middleware' => ['auth']], function () {
    Route::get('/menu-utama', [LoginRegisterController::class, 'index'])->name('menu');

});
Route::get('/menu-utama', [LoginRegisterController::class, 'index'])->name('menu');
Route::get('/postlogin', [LoginRegisterController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [LoginRegisterController::class, 'logout'])->name('logout');
Route::group(['middleware' => ['auth','verified']], function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

//profil,//
Route::get('/profile-user', [ProfilController::class, 'profil'])->name('profil');
Route::post('/updateprofil', [ProfilController::class, 'updateprofil'])->name('updateprofil');

//GantiPassword//
Route::get('/change-password', [ProfilController::class,'changePassword'])->name('change-password')->middleware('auth');
Route::get('/update-password', [ProfilController::class,'updatePassword'])->middleware('auth');

//kategori//
Route::get('/kategori', [DataBarangController::class, 'kategori'])->name('kategori');
Route::post('/insertkategori', [DataBarangController::class, 'insertkategori'])->name('insertkategori');
Route::post('/updatekategori/{id}', [DataBarangController::class, 'updatekategori'])->name('updatekategori');
Route::get('/deletekategori/{id}', [DataBarangController::class, 'deletekategori'])->name('deletekategori');
Route::get('/sampahh', [DataBarangController::class, 'sampahh'])->name('sampahh');
Route::get('/kembalikan_sampahh/{id}', [DataBarangController::class, 'kembalikan_sampahh'])->name('kembalikan_sampahh');
Route::get('/kembalikan_semua_sampahh', [DataBarangController::class, 'kembalikan_semua_sampahh'])->name('kembalikan_semua_sampahh');
Route::get('/hapus_permanen_sampahh/{id}', [DataBarangController::class, 'hapus_permanen_sampahh'])->name('hapus_permanen_sampahh');
Route::get('/hapus_permanen_semua_sampahh', [DataBarangController::class, 'hapus_permanen_semua_sampahh'])->name('hapus_permanen_semua_sampahh');

//data-suplier//
Route::get('/data-supplier', [DataSupplierController::class, 'supplier'])->name('supplier');
Route::post('/insertdata3', [DataSupplierController::class, 'insertdata3'])->name('insertdata3');
Route::post('/updatesupplier/{id}', [DataSupplierController::class, 'updatesupplier'])->name('updatesupplier');
Route::get('/deletesupplier/{id}', [DataSupplierController::class, 'deletesupplier'])->name('deletesupplier');
Route::get('/sampahsup', [DataSupplierController::class, 'sampahsup'])->name('sampahsup');
Route::get('/kembalikan_sampahsup/{id}', [DataSupplierController::class, 'kembalikan_sampahsup'])->name('kembalikan_sampahsup');
Route::get('/kembalikan_semua_sampahsup', [DataSupplierController::class, 'kembalikan_semua_sampahsup'])->name('kembalikan_semua_sampahsup');
Route::get('/hapus_permanen_sampahsup/{id}', [DataSupplierController::class, 'hapus_permanen_sampahsup'])->name('hapus_permanen_sampahsup');
Route::get('/hapus_permanen_semua_sampahsup', [DataSupplierController::class, 'hapus_permanen_semua_sampahsup'])->name('hapus_permanen_semua_sampahsup');

//databarang//
Route::get('/data-barang', [DataBarangController::class, 'barang'])->name('barang');
Route::post('/insertbarang', [DataBarangController::class, 'insertbarang'])->name('insertbarang');
Route::post('/updatebarang/{id}', [DataBarangController::class, 'updatebarang'])->name('updatebarang');
Route::get('/delete/{id}', [DataBarangController::class, 'delete'])->name('delete')->name('delete');
Route::get('/simpanbarang', [DataBarangController::class, 'simpanbarang'])->name('simpanbarang');
Route::get('/sampah', [DataBarangController::class, 'sampah'])->name('sampah');
Route::get('/kembalikan_sampah/{id}', [DataBarangController::class, 'kembalikan_sampah'])->name('kembalikan_sampah');
Route::get('/kembalikan_semua_sampah', [DataBarangController::class, 'kembalikan_semua_sampah'])->name('kembalikan_semua_sampah');
Route::get('/hapus_permanen_sampah/{id}', [DataBarangController::class, 'hapus_permanen_sampah'])->name('hapus_permanen_sampah');
Route::get('/hapus_permanen_semua_sampah', [DataBarangController::class, 'hapus_permanen_semua_sampah'])->name('hapus_permanen_semua_sampah');

//data-pemesan//
Route::get('/data-pemesan', [DataPemesanController::class, 'pemesan'])->name('pemesan');
Route::post('/insertpemesan', [DataPemesanController::class, 'insertpemesan'])->name('insertpemesan');
Route::post('/updatepemesan/{id}', [DataPemesanController::class, 'updatepemesan'])->name('updatepemesan');
Route::get('/deletedata/{id}', [DataPemesanController::class, 'deletedata'])->name('deletedata');
Route::get('/trashh', [DataPemesanController::class, 'trashh'])->name('trashh');
Route::get('/kembalikann/{id}', [DataPemesanController::class, 'kembalikann'])->name('kembalikann');
Route::get('/kembalikan_semuaa', [DataPemesanController::class, 'kembalikan_semuaa'])->name('kembalikan_semuaa');
Route::get('/hapus_permanenn/{id}', [DataPemesanController::class, 'hapus_permanenn'])->name('hapus_permanenn');
Route::get('/hapus_permanen_semuaa', [DataPemesanController::class, 'hapus_permanen_semuaa'])->name('hapus_permanen_semuaa');

//detail pesanan//
Route::get('/detail-pesanan/{kode}', [DataPemesanController::class, 'detail'])->name('detail');
Route::post('/insertpesanan/{id}', [DataPemesanController::class, 'insertpesanan'])->name('insertpesanan');
Route::post('/updatepesanan/{id}/{kode}', [DataPemesanController::class, 'updatepesanan'])->name('updatepesanan');
Route::get('/deletepesanan/{id}/{kode}', [DataPemesanController::class, 'deletepesanan'])->name('deletepesanan');
Route::get('/trash/{kode}', [DataPemesanController::class, 'trash'])->name('trash');
Route::get('/kembalikan/{kode}/{id}', [DataPemesanController::class, 'kembalikan'])->name('kembalikan');
Route::get('/trash/kembalikan/semua/{kode}', [DataPemesanController::class, 'kembalikan_semua'])->name('kembalikan_semua');
Route::get('/hapus_permanen/{kode}/{id}', [DataPemesanController::class, 'hapus_permanen'])->name('hapus_permanen');
Route::get('/trash/hapus/permanen/semua/{kode}', [DataPemesanController::class, 'hapus_permanen_semua'])->name('hapus_permanen_semua');
Route::get('/hitung', [DataPemesanController::class, 'hitung'])->name('hitung');

//rekap-bulanan//
Route::get('/data-rekapbulanan', [DataRekapController::class, 'rekap'])->name('datarekap');
Route::post('/insertdata1', [DataRekapController::class, 'insertdata1'])->name('insertdata1');
Route::get('/grafik-rekap', [DataRekapController::class, 'grafik'])->name('grafik');
Route::post('/ajax', [DataRekapController::class, 'ajax'])->name('ajax');
Route::get('/ajax-graphic', [DataRekapController::class, 'ajaxgraphic'])->name('ajax.graphic');
Route::get('/exportpdf/{year}', [DataRekapController::class, 'exportpdf'])->name('exportpdf');
Route::get('/exportexcel/{year}', [DataRekapController::class, 'exportexcel'])->name('exportexcel');

//data-keuntungan//
Route::get('/data-keuntungan', [DataKeuntunganController::class, 'keuntungan'])->name('keuntungan');
Route::post('/insertdata', [DataKeuntunganController::class, 'insertdata'])->name('insertdata');
Route::post('/keuntungan/ajax', [DataKeuntunganController::class, 'ajax'])->name('keuntungan.ajax');
Route::get('/keuntungan/ajax-graphic', [DataKeuntunganController::class, 'ajaxgraphic'])->name('keuntungan.ajax.graphic');
Route::get('/exportuntungpdf/{year}', [DataKeuntunganController::class, 'exportuntungpdf'])->name('exportuntungpdf');
Route::get('/exportuntungexcel/{year}', [DataKeuntunganController::class, 'exportuntungexcel'])->name('exportuntungexcel');


});
