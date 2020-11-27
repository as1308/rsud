<?php

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
route::view('/dokterr', 'dokterr');

route::view('/karyawan', 'karyawan');

route::view('/obat', 'obat');

route::view('/pasien', 'pasien');

route::view('/penyakit', 'penyakit');

route::view('/periksa', 'periksa');