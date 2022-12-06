<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PapanInformasiController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\AkademikController;
use App\Http\Controllers\WebPengabdianController;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PegawaiController;
use App\Http\Controllers\Admin\MahasiswaController;
use App\Http\Controllers\Admin\KurikulumController;
use App\Http\Controllers\Admin\UnitKerjaController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\SlideController;
use App\Http\Controllers\Admin\VisiMisiController;
use App\Http\Controllers\Admin\AkreditasiController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\LowonganController;
use App\Http\Controllers\Admin\PedomanController;
use App\Http\Controllers\Admin\JudulTAController;
use App\Http\Controllers\Admin\FasilitasController;
use App\Http\Controllers\Admin\PengabdianController;
use App\Http\Controllers\Admin\PengabdianMahasiswaController;
use App\Http\Controllers\Admin\PenelitianController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\Admin\GaleriController;
use App\Http\Controllers\Admin\PublikasiController;
use App\Http\Controllers\Admin\SeminarController;
use App\Http\Controllers\Admin\KerjasamaController;

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

Route::prefix('admin')->middleware('auth')->group(function(){
    Route::resource('/', AdminController::class);
    Route::get('contact', [AdminController::class, 'adminContact']);
    Route::get('delete-contact/{contact}', [AdminController::class, 'destroy']);

    Route::get('showContact/{contact}', [AdminController::class, 'showContact']);
    Route::get('admin/contatc/{contact}', [AdminController::class, 'destroy']);

    Route::get('/profil', [AdminController::class, 'profil']);
    Route::PUT('/profil/{user}', [AdminController::class, 'updateProfil']);


    Route::resource('pegawai', PegawaiController::class);
    Route::resource('/mahasiswa', MahasiswaController::class);
    Route::resource('/kurikulum', KurikulumController::class);
    Route::resource('/penelitian', PenelitianController::class);
    Route::get('penelitian/{injection}/edit', [PenelitianController::class, 'edit']);
    Route::PUT('penelitian/{injection}/update', [PenelitianController::class, 'update']);
    Route::resource('/pedoman', PedomanController::class);
    Route::resource('/pengabdian', PengabdianController::class);
    Route::resource('/pengabdian-mahasiswa', PengabdianMahasiswaController::class);
    
    Route::resource('/fasilitas', FasilitasController::class);
    Route::get('fasilitas/{fasilitas}/edit', [FasilitasController::class, 'edit']);
    Route::PUT('fasilitas/{fasilitas}/update', [FasilitasController::class, 'update']);

    Route::post('store-galery', [FasilitasController::class, 'storeGalery']);

    Route::resource('unit-kerja', UnitKerjaController::class);
    Route::resource('/visi-misi', VisiMisiController::class);
    Route::PUT('visi-misi/{visimisi}/update', [VisiMisiController::class , 'update']);
    
    Route::resource('/akreditasi', AkreditasiController::class);
    Route::resource('/video', VideoController::class);
    Route::resource('/slide', SlideController::class);
    Route::resource('/user', UserController::class);
    Route::resource('/berita', BeritaController::class);
    Route::get('berita/{berita}/edit', [BeritaController::class, 'edit']);
    Route::PUT('berita/{berita}/update', [BeritaController::class, 'update']);
    Route::resource('/lowongan', LowonganController::class);
    Route::resource('/judul-tugas-akhir', JudulTAController::class);
    Route::PUT('judul-tugas-akhir/{judulta}/update', [JudulTAController::class , 'update']);


    Route::resource('/galeri', GaleriController::class);
    Route::resource('/publikasi', PublikasiController::class);
    Route::resource('/seminar', SeminarController::class);
    Route::resource('/kerjasama', KerjasamaController::class);

});

Route::resource('/', HomeController::class);

Route::get('contact', [HomeController::class, 'contact']);
Route::post('storeContact', [HomeController::class, 'storeContact']);

Route::get('fasilitas-ruang-kelas', [HomeController::class, 'kelasRuang']);
Route::get('fasilitas-workshop', [HomeController::class, 'workshop']);
Route::get('fasilitas-laboratorium-mekanik', [HomeController::class, 'mekanik']);
Route::get('fasilitas-laboratorium-pnuematik-dan-hidrolik', [HomeController::class, 'hidrolik']);
Route::get('fasilitas-laboratorium-mekanika-fluida', [HomeController::class, 'fluida']);
Route::get('show-fasilitas/{fasilitas}', [HomeController::class, 'showFasilitas']);

Route::get('jurnal/penelitian-internal', [WebPengabdianController::class, 'penelitianInternal']);
Route::get('jurnal/penelitian-pusat', [WebPengabdianController::class, 'penelitianPusat']);
Route::get('jurnal/pengabdian-dosen', [WebPengabdianController::class, 'pengabdianDosen']);
Route::get('jurnal/pengabdian-internal', [WebPengabdianController::class, 'pengabdianInternal']);
Route::get('jurnal/pengabdian-mahasiswa', [WebPengabdianController::class, 'pengabdianMahasiswa']);

Route::get('akademik/kurikulum', [AkademikController::class, 'kurikulum']);
Route::get('akademik/akreditasi', [AkademikController::class, 'akreditasi']);
Route::get('akademik/tugas-akhir', [AkademikController::class, 'tugasAkhir']);


Route::get('profil-pimpinan', [ProfilController::class, 'pimpinan']);
Route::get('profil-dosen', [ProfilController::class, 'dosen']);
Route::get('profil-admin-teknisi', [ProfilController::class, 'adminTeknisi']);
Route::get('visi-misi', [ProfilController::class, 'visimisi']);
Route::get('kompetensi-lulusan', [ProfilController::class, 'lulusan']);
Route::get('alumni', [ProfilController::class, 'alumni']);

Route::get('pedoman', [HomeController::class, 'pedoman']);

Route::get('berita', [PapanInformasiController::class, 'berita']);
Route::get('show-berita/{berita}', [PapanInformasiController::class, 'showBerita']);
Route::get('lowongan', [PapanInformasiController::class, 'lowongan']);
Route::get('show-lowongan/{lowongan}', [PapanInformasiController::class, 'showLowongan']);

Route::get('event/publikasi', [HomeController::class, 'publikasi']);
Route::get('event/seminar', [HomeController::class, 'seminar']);
Route::get('event/galeri', [HomeController::class, 'galeri']);
Route::get('event/detail-galeri/{galeri}', [HomeController::class, 'showGaleri']);

Route::get('kerjasama', [HomeController::class, 'kerjasama']);
Route::get('kerjasama/{kerjasama}', [HomeController::class, 'showKerjasama']);

Route::get('event/video', [HomeController::class, 'video']);
Route::get('event/video-detail/{video}', [HomeController::class, 'showVideo']);




Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'loginproses']);
Route::get('logout', [AuthController::class, 'logout']);