<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SecurityController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LombaController;
use App\Http\Controllers\NomorPesertaController;
use App\Http\Controllers\GaleriLombaController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get("/tampil-user", [UserController::class, "tampil"] )->name("tampil-user");
Route::get("/input-user", [UserController::class, "form_user"] )->name("user_input");
Route::post("/simpan-user", [UserController::class, "user_simpan"] )->name("user_simpan");
Route::get("/edit-user/{id}", [UserController::class, "form_update"] )->name("user_edit");
Route::put("/update-user/{id}", [UserController::class, "user_update"] )->name("user_update");
Route::delete("/hapus-user/{id}", [UserController::class, "hapus"] )->name("user_hapus"); //URL Form hapus
Route::get("/tampilin-user/{id}", [UserController::class, "show"] )->name("user_show"); //URL Form show
Route::get("/login", [SecurityController::class, "formLogin"])->name("login");
Route::post("/proses-login", [SecurityController::class,"prosesLogin"])->name("proses_login");
Route::get("/logout", [SecurityController::class, "logout"])->name("logout");

Route::middleware("auth")->group(function() {

    Route::get("kategori/buat", [KategoriController::class, 'buat'])->name("buat_kategori");
    Route::post("kategori/simpan", [KategoriController::class, 'simpan'])->name("simpan_kategori");
    Route::get("kategori/tampil/{id}", [KategoriController::class, 'tampil'])->name("tampil_kategori");
    Route::get("kategori/semua", [KategoriController::class, 'semua'])->name("semua_kategori");
    Route::get("kategori/ubah/{id}", [KategoriController::class, 'ubah'])->name("ubah_kategori");
    Route::put("kategori/update/{id}", [KategoriController::class, 'update'])->name("update_kategori");
    Route::delete("kategori/hapus/{id}", [KategoriController::class, 'hapus'])->name("hapus_kategori");

    Route::get("lomba/buat", [LombaController::class, 'buat'])->name("buat_lomba");
    Route::post("lomba/simpan", [LombaController::class, 'simpan'])->name("simpan_lomba");
    Route::get("lomba/tampil/{id}", [LombaController::class, 'tampil'])->name("tampil_lomba");
    Route::get("lomba/semua", [LombaController::class, 'semua'])->name("semua_lomba");
    Route::get("lomba/ubah/{id}", [LombaController::class, 'ubah'])->name("ubah_lomba");
    Route::put("lomba/update/{id}", [LombaController::class, 'update'])->name("update_lomba");
    Route::delete("lomba/hapus/{id}", [LombaController::class, 'hapus'])->name("hapus_lomba");

    Route::get("galeri/buat/{lomba_id}", [GaleriLombaController::class, 'buat'])->name("buat_galeri");
    Route::post("galeri/simpan/{lomba_id}", [GaleriLombaController::class, 'simpan'])->name("simpan_galeri");
    Route::get("galeri/tampil/{lomba_id}", [GaleriLombaController::class, 'tampil'])->name("tampil_galeri");
    Route::get("galeri/semua", [GaleriLombaController::class, 'semua'])->name("semua_galeri");
    Route::get("galeri/ubah/{id}", [GaleriLombaController::class, 'ubah'])->name("ubah_galeri");
    Route::put("galeri/update/{id}", [GaleriLombaController::class, 'update'])->name("update_galeri");
    Route::delete("galeri/hapus/{id}", [GaleriLombaController::class, 'hapus'])->name("hapus_galeri");

    Route::get("nomor_peserta/buat", [NomorPesertaController::class, 'buat'])->name("buat_nomor_peserta");
    Route::post("nomor_peserta/simpan", [NomorPesertaController::class, 'simpan'])->name("simpan_nomor_peserta");
    Route::get("nomor_peserta/tampil/{id}", [NomorPesertaController::class, 'tampil'])->name("tampil_nomor_peserta");
    Route::get("nomor_peserta/semua", [NomorPesertaController::class, 'semua'])->name("semua_nomor_peserta");
    Route::get("nomor_peserta/ubah/{id}", [NomorPesertaController::class, 'ubah'])->name("ubah_nomor_peserta");
    Route::put("nomor_peserta/update/{id}", [NomorPesertaController::class, 'update'])->name("update_nomor_peserta");
    Route::delete("nomor_peserta/hapus/{id}", [NomorPesertaController::class, 'hapus'])->name("hapus_nomor_peserta");

    Route::post('daftar_lomba/daftar/{lomba_id}', [\App\Http\Controllers\DaftarLombaController::class, 'daftar_lomba'])->name('daftar_lomba_daftar');
    Route::get('daftar_lomba/daftar/{lomba_id}', [\App\Http\Controllers\DaftarLombaController::class, 'form_daftar_lomba'])->name('daftar_lomba_get');
    Route::get('daftar_lomba/', [\App\Http\Controllers\DaftarLombaController::class, 'index'])->name('daftar_lomba_index');
});



