<?php

use App\Http\Controllers\InformasiController;
use App\Http\Controllers\InformasiPelangganController;
use App\Http\Controllers\KlaimController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PenagihanController;
use App\Http\Controllers\PerlindunganIndividuController;
use App\Http\Controllers\PerlindunganMikroController;
use App\Http\Controllers\PerlindunganPrestigeController;
use App\Http\Controllers\PerlindunganSyariahController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SolusiKoporatController;
use App\Models\PerlindunganIndividu;
use Illuminate\Support\Facades\Route;

// Route untuk halaman utama
Route::get('/', function () {
    return view('landingpage.index');
})->name('landingpage.index');

// Route untuk halaman 'hubungikami'
Route::get('/hubungikami', function () {
    return view('landingpage.hubungikami');
})->name('landingpage.hubungikami');

// Route untuk Halaman 'Informasi'
Route::get('/pengetahuan', function () {
    return view('informasi.pengetahuan');
})->name('informasi.pengetahuan');

Route::get('/produk', function () {
    return view('informasi.produk');
})->name('informasi.produk');

Route::get('/promo', function () {
    return view('informasi.promo');
})->name('informasi.promo');


// Route untuk Halaman Informasi Pelanggan
Route::get('/kebijakan', function () {
    return view('informasipelanggan.kebijakan');
})->name('informasipelanggan.kebijakan');

Route::get('/klaim', function () {
    return view('informasipelanggan.klaim');
})->name('informasipelanggan.klaim');

Route::get('/pelanggan', function () {
    return view('informasipelanggan.pelanggan');
})->name('informasipelanggan.pelanggan');

Route::get('/penagihan', function () {
    return view('informasipelanggan.penagihan');
})->name('informasipelanggan.penagihan');


// Route untuk Halaman Layanan
Route::get('/formulir', function () {
    return view('layanan.formulir');
})->name('layanan.formulir');

Route::get('/kreditkumpulan', function () {
    return view('layanan.servis.kreditkumpulan');
})->name('layanan.servis.kreditkumpulan');

Route::get('/online', function () {
    return view('layanan.servis.online');
})->name('layanan.servis.online');

Route::get('/perlindunganindividu', function () {
    return view('layanan.servis.perlindunganindividu');
})->name('layanan.servis.perlindunganindividu');

Route::get('/perlindunganmikro', function () {
    return view('layanan.servis.perlindunganmikro');
})->name('layanan.servis.perlindunganmikro');

Route::get('/perlindunganprestige', function () {
    return view('layanan.servis.perlindunganprestige');
})->name('layanan.servis.perlindunganprestige');

Route::get('/perlindungansyariah', function () {
    return view('layanan.servis.perlindungansyariah');
})->name('layanan.servis.perlindungansyariah');

Route::get('/solusikorporat', function () {
    return view('layanan.servis.solusikorporat');
})->name('layanan.servis.solusikorporat');

Route::get('/view-api', function () {
    return view('view-api');
})->name('view-api');
// landing page

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/admin', function () {
//     return view('admin');
// })->name('admin');

// Route untuk ProfilController
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Halaman admin layanan

    // Route::get('/dashboard_perlindungan_mikro', function () {
    //     return view('admin.perlindunganmikro.show');
    // })->name('admin.perlindunganmikro.show');

    // Route::get('/dashboard_perlindungan_syariah', function () {
    //     return view('admin.perlindungansyariah.show');
    // })->name('admin.perlindungansyariah.show');

    // Route::get('/dashboard_perlindungan_prestige', function () {
    //     return view('admin.perlindunganprestige.show');
    // })->name('admin.perlindunganprestige.show');

    // Route::get('/dashboard_solusi_korporat', function () {
    //     return view('admin.solusikorporat.show');
    // })->name('admin.solusikorporat.show');

// Halaman admin informasi
Route::get('/dashboard_produk', function () {
    return view('admin.produk.show');
})->name('admin.produk.show');

// Halaman admin informasi pelanggan

Route::get('/dashboard_klaim', [KlaimController::class, 'show'])->name('admin.klaim.show');

// Admin Penagihan
Route::get('/dashboard_penagihan', [PenagihanController::class, 'show'])->name('admin.penagihan.show');
Route::get('/dashboard_penagihan/{id}/edit', [PenagihanController::class, 'edit'])->name('admin.penagihan.edit');
Route::post('/dashboard_penagihan/{id}/update', [PenagihanController::class, 'update'])->name('admin.penagihan.update');
Route::delete('/dashboard_penagihan/{id}', [PenagihanController::class, 'destroy'])->name('admin.penagihan.destroy');
Route::get('penagihan/create', [PenagihanController::class, 'create'])->name('admin.penagihan.create');
Route::post('penagihan', [PenagihanController::class, 'store'])->name('admin.penagihan.store');



// Admin Perlindungan Individu
Route::get('/dashboard_perlindungan_individu/create', [PerlindunganIndividu::class, 'create'])->name('admin.perlindunganindividu.create');
Route::get('/dashboard_perlindungan_individu', [PerlindunganIndividuController::class, 'show'])->name('admin.perlindunganindividu.show');
Route::get('/dashboard_perlindungan_individu/{id}/edit', [PerlindunganIndividuController::class, 'edit'])->name('admin.perlindunganindividu.edit');
Route::post('/dashboard_perlindungan_individu/store', [PerlindunganIndividuController::class, 'store'])->name('admin.perlindunganindividu.store');
Route::put('/dashboard_perlindungan_individu/{id}/update', [PerlindunganIndividuController::class, 'update'])->name('admin.perlindunganindividu.update');
Route::delete('/dashboard_perlindungan_individu/{id}', [PerlindunganIndividu::class, 'destroy'])->name('admin.perlindunganindividu.destroy');

Route::get('/dashboard_perlindunganmikro', [PerlindunganMikroController::class, 'show'])->name('admin.perlindunganmikro.show');
Route::get('/dashboard_perlindungansyariah', [PerlindunganSyariahController::class, 'show'])->name('admin.perlindungansyariah.show');
Route::get('/dashboard_perlindunganprestige', [PerlindunganPrestigeController::class, 'show'])->name('admin.perlindunganprestige.show');
Route::get('/dashboard_solusikorporat', [SolusiKoporatController::class, 'show'])->name('admin.solusikorporat.show');

require __DIR__.'/auth.php';
