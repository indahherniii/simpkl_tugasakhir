<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\Admindashboard;
use App\Http\Controllers\Admin\Adminmahasiswa;
use App\Http\Controllers\Admin\Admininstansi;




Route::prefix('admin')->group(function () {
    Route::controller(Admindashboard::class)->group(function () {
        Route::get('/dashboard', 'index');

    });
    Route::controller(Adminmahasiswa::class)->group(function () {
        Route::get('/mahasiswa', 'index');
        Route::get('/mahasiswa/add', 'add');
        Route::post('/mahasiswa/addAct', 'addAct');
        Route::get('/mahasiswa/edit/{mahasiswa}', 'edit');
        Route::post('/mahasiswa/editAct', 'editAct');
        Route::get('/mahasiswa/hapus/{mahasiswa}', 'hapus');

    });
    Route::controller(Admininstansi::class)->group(function () {
        Route::get('/instansi', 'index');
        Route::get('/instansi/add', 'add');
        Route::post('/instansi/addAct', 'addAct');
        Route::get('/instansi/edit/{instansi}', 'edit');
        Route::post('/instansi/editAct', 'editAct');
        Route::get('/instansi/hapus/{instansi}', 'hapus');

    });
});
