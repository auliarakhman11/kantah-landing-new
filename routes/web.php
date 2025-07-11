<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlankoController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormulirController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PersyaratanController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

//dashboard
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
//end dashboard

//formulir
Route::get('getKelurahan/{kecamatan_id}', [FormulirController::class, 'getKelurahan'])->name('getKelurahan');
Route::get('getDataPemohon/{nik}', [FormulirController::class, 'getDataPemohon'])->name('getDataPemohon');

Route::get('riwayatPengisian', [FormulirController::class, 'riwayatPengisian'])->name('riwayatPengisian');

Route::get('pendaftaranPertama', [FormulirController::class, 'pendaftaranPertama'])->name('pendaftaranPertama');
Route::post('addPendaftaranPertama', [FormulirController::class, 'addPendaftaranPertama'])->name('addPendaftaranPertama');
Route::get('viewPendaftaranPertama', [FormulirController::class, 'viewPendaftaranPertama'])->name('viewPendaftaranPertama');
Route::get('downloadPendaftaranPertama', [FormulirController::class, 'downloadPendaftaranPertama'])->name('downloadPendaftaranPertama');

Route::get('pendaftaranKedua', [FormulirController::class, 'pendaftaranKedua'])->name('pendaftaranKedua');
Route::post('addPendaftaranKedua', [FormulirController::class, 'addPendaftaranKedua'])->name('addPendaftaranKedua');
Route::get('viewPendaftaranKedua', [FormulirController::class, 'viewPendaftaranKedua'])->name('viewPendaftaranKedua');
Route::get('downloadPendaftaranKedua', [FormulirController::class, 'downloadPendaftaranKedua'])->name('downloadPendaftaranKedua');

Route::get('pendaftaranKetiga', [FormulirController::class, 'pendaftaranKetiga'])->name('pendaftaranKetiga');
Route::post('addPendaftaranKetiga', [FormulirController::class, 'addPendaftaranKetiga'])->name('addPendaftaranKetiga');
Route::get('viewPendaftaranKetiga', [FormulirController::class, 'viewPendaftaranKetiga'])->name('viewPendaftaranKetiga');
Route::get('downloadPendaftaranKetiga', [FormulirController::class, 'downloadPendaftaranKetiga'])->name('downloadPendaftaranKetiga');

Route::get('gantiNamaHt', [FormulirController::class, 'gantiNamaHt'])->name('gantiNamaHt');
Route::post('addgantiNamaHt', [FormulirController::class, 'addgantiNamaHt'])->name('addgantiNamaHt');
Route::get('viewGantiNamaHt', [FormulirController::class, 'viewGantiNamaHt'])->name('viewGantiNamaHt');
Route::get('downloadGantiNamaHt', [FormulirController::class, 'downloadGantiNamaHt'])->name('downloadGantiNamaHt');

Route::get('gantiNamaSertipikat', [FormulirController::class, 'gantiNamaSertipikat'])->name('gantiNamaSertipikat');
Route::post('addGantiNamaSertipikat', [FormulirController::class, 'addGantiNamaSertipikat'])->name('addGantiNamaSertipikat');
Route::get('viewGantiNamaSertipikat', [FormulirController::class, 'viewGantiNamaSertipikat'])->name('viewGantiNamaSertipikat');
Route::get('downloadGantiNamaSertipikat', [FormulirController::class, 'downloadGantiNamaSertipikat'])->name('downloadGantiNamaSertipikat');

Route::get('mergerHakTanggungan', [FormulirController::class, 'mergerHakTanggungan'])->name('mergerHakTanggungan');
Route::post('addMergerHakTanggungan', [FormulirController::class, 'addMergerHakTanggungan'])->name('addMergerHakTanggungan');
Route::get('viewMergerHakTanggungan', [FormulirController::class, 'viewMergerHakTanggungan'])->name('viewMergerHakTanggungan');
Route::get('downloadMergerHakTanggungan', [FormulirController::class, 'downloadMergerHakTanggungan'])->name('downloadMergerHakTanggungan');

Route::get('pelunasanBphtb', [FormulirController::class, 'pelunasanBphtb'])->name('pelunasanBphtb');
Route::post('addPelunasanBphtb', [FormulirController::class, 'addPelunasanBphtb'])->name('addPelunasanBphtb');
Route::get('viewPelunasanBphtb', [FormulirController::class, 'viewPelunasanBphtb'])->name('viewPelunasanBphtb');
Route::get('downloadPelunasanBphtb', [FormulirController::class, 'downloadPelunasanBphtb'])->name('downloadPelunasanBphtb');

Route::get('formulirRoya', [FormulirController::class, 'FormulirRoya'])->name('FormulirRoya');
Route::post('addFormulirRoya', [FormulirController::class, 'addFormulirRoya'])->name('addFormulirRoya');
Route::get('viewFormulirRoya', [FormulirController::class, 'viewFormulirRoya'])->name('viewFormulirRoya');
Route::get('downloadFormulirRoya', [FormulirController::class, 'downloadFormulirRoya'])->name('downloadFormulirRoya');

Route::get('formulirPeralihanHak', [FormulirController::class, 'formulirPeralihanHak'])->name('formulirPeralihanHak');
Route::post('addFormulirPeralihanHak', [FormulirController::class, 'addFormulirPeralihanHak'])->name('addFormulirPeralihanHak');
Route::get('viewFormulirPeralihanHak', [FormulirController::class, 'viewFormulirPeralihanHak'])->name('viewFormulirPeralihanHak');
Route::get('downloadFormulirPeralihanHak', [FormulirController::class, 'downloadFormulirPeralihanHak'])->name('downloadFormulirPeralihanHak');

Route::get('sertipikatRusak', [FormulirController::class, 'sertipikatRusak'])->name('sertipikatRusak');
Route::post('addSertipikatRusak', [FormulirController::class, 'addSertipikatRusak'])->name('addSertipikatRusak');
Route::get('viewSertipikatRusak', [FormulirController::class, 'viewSertipikatRusak'])->name('viewSertipikatRusak');
Route::get('downloadSertipikatRusak', [FormulirController::class, 'downloadSertipikatRusak'])->name('downloadSertipikatRusak');

Route::get('penataanBatas', [FormulirController::class, 'penataanBatas'])->name('penataanBatas');
Route::post('addPenataanBatas', [FormulirController::class, 'addPenataanBatas'])->name('addPenataanBatas');
Route::get('viewPenataanBatas', [FormulirController::class, 'viewPenataanBatas'])->name('viewPenataanBatas');
Route::get('downloadPenataanBatas', [FormulirController::class, 'downloadPenataanBatas'])->name('downloadPenataanBatas');

Route::get('pisahPecahGabung', [FormulirController::class, 'pisahPecahGabung'])->name('pisahPecahGabung');
Route::post('addPisahPecahGabung', [FormulirController::class, 'addPisahPecahGabung'])->name('addPisahPecahGabung');
Route::get('viewPisahPecahGabung', [FormulirController::class, 'viewPisahPecahGabung'])->name('viewPisahPecahGabung');
Route::get('downloadPisahPecahGabung', [FormulirController::class, 'downloadPisahPecahGabung'])->name('downloadPisahPecahGabung');

Route::get('perubahanHakPeningkatan', [FormulirController::class, 'perubahanHakPeningkatan'])->name('perubahanHakPeningkatan');
Route::post('addPerubahanHakPeningkatan', [FormulirController::class, 'addPerubahanHakPeningkatan'])->name('addPerubahanHakPeningkatan');
Route::get('viewPerubahanHakPeningkatan', [FormulirController::class, 'viewPerubahanHakPeningkatan'])->name('viewPerubahanHakPeningkatan');
Route::get('downloadPerubahanHakPeningkatan', [FormulirController::class, 'downloadPerubahanHakPeningkatan'])->name('downloadPerubahanHakPeningkatan');

Route::get('perubahanHakPenurunan', [FormulirController::class, 'perubahanHakPenurunan'])->name('perubahanHakPenurunan');
Route::post('addPerubahanHakPenurunan', [FormulirController::class, 'addPerubahanHakPenurunan'])->name('addPerubahanHakPenurunan');
Route::get('viewPerubahanHakPenurunan', [FormulirController::class, 'viewPerubahanHakPenurunan'])->name('viewPerubahanHakPenurunan');
Route::get('downloadPerubahanHakPenurunan', [FormulirController::class, 'downloadPerubahanHakPenurunan'])->name('downloadPerubahanHakPenurunan');


Route::get('pkkpr', [FormulirController::class, 'pkkpr'])->name('pkkpr');
//endformulir

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/persyaratan', [PersyaratanController::class, 'index'])->name('Persyaratan');
Route::get('/persyaratan-peralihan-hak', [PersyaratanController::class, 'Pph'])->name('Pph');
Route::get('/persyaratan-peralihan-hak-disabilitas', [PersyaratanController::class, 'PphDisabilitas'])->name('PphDisabilitas');
Route::get('/ippt', [PersyaratanController::class, 'Ippt'])->name('Ippt');
Route::get('/bphtb', [PersyaratanController::class, 'Bphtb'])->name('Bphtb');
Route::get('/skpt', [PersyaratanController::class, 'Skpt'])->name('Skpt');
Route::get('/psp', [PersyaratanController::class, 'Psp'])->name('Psp');
Route::get('/ppu', [PersyaratanController::class, 'Ppu'])->name('Ppu');
Route::get('/pppp', [PersyaratanController::class, 'Pppp'])->name('Pppp');
Route::get('/rubah-hak', [PersyaratanController::class, 'RubahHak'])->name('RubahHak');
Route::get('/roya', [PersyaratanController::class, 'roya'])->name('roya');
Route::get('/penurunan', [PersyaratanController::class, 'penurunan'])->name('penurunan');
Route::get('/lelang', [PersyaratanController::class, 'lelang'])->name('lelang');
Route::get('/pengecekan', [PersyaratanController::class, 'pengecekan'])->name('pengecekan');
Route::get('/pps', [PersyaratanController::class, 'pps'])->name('pps');
Route::get('/pengajuan', [PersyaratanController::class, 'pengajuan'])->name('pengajuan');

Route::get('/pengajuan-pdf', [PersyaratanController::class, 'pengajuanPdf'])->name('pengajuanPdf');
Route::get('/pps-pdf', [PersyaratanController::class, 'ppsPdf'])->name('ppsPdf');
Route::get('/pengecekan-pdf', [PersyaratanController::class, 'pengecekanPdf'])->name('pengecekanPdf');
Route::get('/roya-pdf', [PersyaratanController::class, 'royaPdf'])->name('royaPdf');
Route::get('/pph-pdf', [PersyaratanController::class, 'PphPdf'])->name('PphPdf');
Route::get('/pph-disabilitas-pdf', [PersyaratanController::class, 'PphDisabilitasPdf'])->name('PphDisabilitasPdf');

Route::get('/ippt-pdf', [PersyaratanController::class, 'IpptPdf'])->name('IpptPdf');

Route::get('/bphtb-pdf', [PersyaratanController::class, 'BphtbPdf'])->name('BphtbPdf');

Route::get('/skpt-pdf', [PersyaratanController::class, 'SkptPdf'])->name('SkptPdf');

Route::get('/psp-pdf', [PersyaratanController::class, 'PspPdf'])->name('PspPdf');

Route::get('/ppu-pdf', [PersyaratanController::class, 'PpuPdf'])->name('PpuPdf');

Route::get('/pppp-pdf', [PersyaratanController::class, 'PpppPdf'])->name('PpppPdf');

Route::get('/rubah-hak-pdf', [PersyaratanController::class, 'RubahHakPdf'])->name('RubahHakPdf');
Route::get('RubahHakKuasaPdf', [PersyaratanController::class, 'RubahHakKuasaPdf'])->name('RubahHakKuasaPdf');

Route::get('/penurunan-pdf', [PersyaratanController::class, 'penurunanPdf'])->name('penurunanPdf');

Route::get('/lelang-pdf', [PersyaratanController::class, 'lelangPdf'])->name('lelangPdf');

//blanko
Route::get('/blanko', [BlankoController::class, 'index'])->name('blanko');
Route::get('/peralihan-hak', [BlankoController::class, 'peralihanHak'])->name('peralihanHak');

// Route::get('get-kelurahan/{id}', [BlankoController::class, 'getKelurahan'])->name('getKelurahan');
// Route::get('get-kecamatan/{id}', [BlankoController::class, 'getKecamatan'])->name('getKecamatan');

Route::post('input-peralihan-hak', [BlankoController::class, 'inputPeralihanHak'])->name('inputPeralihanHak');
Route::get('get-data-pemohon/{id}/{pelayanan_id}', [BlankoController::class, 'getDataPemohon'])->name('getDataPemohon');
Route::get('pdf-peralihan-hak/{id}', [BlankoController::class, 'pdfPeralihanHak'])->name('pdfPeralihanHak');
Route::get('view-peralihan-hak/{id}', [BlankoController::class, 'viewPeralihanHak'])->name('viewPeralihanHak');
Route::get('redirect-peralihan-hak/{id}', [BlankoController::class, 'redirectPeralihanHak'])->name('redirectPeralihanHak');

Route::get('/pemecahan-pemisahan', [BlankoController::class, 'pemecahanPemisahan'])->name('pemecahanPemisahan');
Route::get('/redirect-pemecahan-pemisahan/{id}', [BlankoController::class, 'redirectPemecahanPemisahan'])->name('redirectPemecahanPemisahan');
Route::get('/pdf-pemecahan-pemisahan/{id}', [BlankoController::class, 'pdfPemecahanPemisahan'])->name('pdfPemecahanPemisahan');
Route::post('input-pemecahan-pemisahan', [BlankoController::class, 'inputPemecahanPemisahan'])->name('inputPemecahanPemisahan');

Route::get('/peningkatan', [BlankoController::class, 'peningkatan'])->name('peningkatan');
Route::post('/input-peningkatan', [BlankoController::class, 'inputPeningkatan'])->name('inputPeningkatan');
Route::get('/redirect-peningkatan/{id}', [BlankoController::class, 'redirectPeningkatan'])->name('redirectPeningkatan');
Route::get('/pdf-peningkatan/{id}', [BlankoController::class, 'pdfPeningkatan'])->name('pdfPeningkatan');

//roya
Route::get('/roya_input', [BlankoController::class, 'roya'])->name('royaInput');
Route::post('/input-roya', [BlankoController::class, 'inputRoya'])->name('inputRoya');
Route::get('/redirect-roya/{id}', [BlankoController::class, 'redirectRoya'])->name('redirectRoya');
Route::get('/pdf-roya/{id}', [BlankoController::class, 'pdfRoya'])->name('pdfRoya');
//endroya

//pengkuran ulang
Route::get('/pengukuran-ulang', [BlankoController::class, 'pengukuranUlang'])->name('pengukuranUlang');
Route::post('/input-pengukuran-ulang', [BlankoController::class, 'inputPengukuranUlang'])->name('inputPengukuranUlang');
Route::get('/redirect-pengukuran-ulang/{id}', [BlankoController::class, 'redirectPengukuranUlang'])->name('redirectPengukuranUlang');
Route::get('/pdf-pengukuran-ulang/{id}', [BlankoController::class, 'pdfPengukuranUlang'])->name('pdfPengukuranUlang');
Route::get('/pdf-ptp/{id}', [BlankoController::class, 'pdfPtp'])->name('pdfPtp');
//end pengukuran ulang

//ptp
Route::get('/ptp', [BlankoController::class, 'ptp'])->name('ptp');
Route::post('/input-ptp', [BlankoController::class, 'inputPtp'])->name('inputPtp');
Route::get('/redirect-ptp/{id}', [BlankoController::class, 'redirectPtp'])->name('redirectPtp');
//end ptp

//pertamakali
Route::get('/pertamakali', [BlankoController::class, 'pertamakali'])->name('pertamakali');
Route::post('/input-pertamakali', [BlankoController::class, 'inputPertamakali'])->name('inputPertamakali');
Route::get('/redirect-pertamakali/{id}', [BlankoController::class, 'redirectPertamakali'])->name('redirectPertamakali');
Route::get('/pdf-pertamakali/{id}', [BlankoController::class, 'pdfPertamakali'])->name('pdfPertamakali');
//endpertamakali

//end blanko

Route::get('testWord', [BlankoController::class, 'testWord'])->name('testWord');



// //ppat
// Route::get('/ppat',[HomeController::class,'ppat'])->name('ppat');
// //endppat

Route::middleware('auth')->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('get-data-permohonan', [AdminController::class, 'getDataPemohonan'])->name('getDataPemohonan');
});

Route::middleware('guest')->group(function () {
    Route::get('/login-page', [AuthController::class, 'login_page'])->name('loginPage');
    Route::post('login', [AuthController::class, 'login'])->name('login');
});
//login

//end login
