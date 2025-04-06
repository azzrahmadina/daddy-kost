<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\PenghuniController;
use App\Http\Controllers\InventarisController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\KebijakanController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\SyaratController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\WelcomeUserController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AdminRegisterController;
use App\Http\Controllers\UserLoginController;
use App\Http\Controllers\UserRegisterController;
use App\Http\Controllers\UserHomeController;
use App\Http\Controllers\UserKategoriController;
use App\Http\Controllers\UserMenuController;
use App\Http\Controllers\UserPeraturanController;
use App\Http\Controllers\UserNotifikasiController;
use App\Http\Controllers\UserKomplainController;


Route::get('/', function () { return view('welcome'); });

Auth::routes();

// ROUTE ADMIN

Route::get('admin/register', [AdminRegisterController::class, 'showRegisterForm'])->name('admin.register');
Route::post('admin/register', [AdminRegisterController::class, 'register']);

Route::get('/admin/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminLoginController::class, 'login'])->name('admin.login.submit');
Route::middleware('auth:admin')->get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth:admin', 'verified']], function(){
    Route::resource('admin/kategori', KategoriController::class);
    Route::get('/kategori/search', [KategoriController::class, 'search']);
    Route::get('/admin/kategori/{id}/edit', [KategoriController::class, 'edit']);

    Route::resource('admin/kamar', KamarController::class);
    Route::get('/kamar/search', [KamarController::class, 'search']);
    Route::get('/admin/kamar/{id}/edit', [KamarController::class, 'edit']);

    Route::resource('admin/penghuni', PenghuniController::class);
    Route::get('/penghuni/search', [PenghuniController::class, 'search']);
    Route::get('/admin/penghuni/{id}/edit', [PenghuniController::class, 'edit']);

    Route::resource('admin/inventaris', InventarisController::class);
    Route::get('/inventaris/search', [InventarisController::class, 'search']);
    Route::get('/admin/inventaris/{id}/edit', [InventarisController::class, 'edit']);

    Route::resource('admin/menu', MenuController::class);
    Route::get('/menu/search', [MenuController::class, 'search']);
    Route::get('/admin/menu/{id}/edit', [MenuController::class, 'edit']);

    Route::resource('admin/transaksi', TransaksiController::class);
    Route::get('/transaksi/search', [TransaksiController::class, 'search']);
    Route::get('/admin/transaksi/{id}/edit', [TransaksiController::class, 'edit']);
    Route::get('/getHargaKamar/{id}', [KamarController::class, 'getHargaKamar']);
    Route::get('/admin/transaksi/{id}/edit', [TransaksiController::class, 'edit']);
    Route::put('/admin/transaksi/{id}', [TransaksiController::class, 'update']);


    Route::resource('admin/pesanan', PesananController::class);
    Route::get('/pesanan/search', [PesananController::class, 'search']);
    Route::get('/admin/pesanan/{id}/edit', [PesananController::class, 'edit']);

    Route::resource('admin/pengaduan', PengaduanController::class);
    Route::get('/pengaduan/search', [PengaduanController::class, 'search']);
    Route::get('/admin/pengaduan/{id}/edit', [PengaduanController::class, 'edit']);
});


// ROUTE USER

// Register User
Route::get('/register', [UserRegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [UserRegisterController::class, 'register'])->name('user.register.submit');

// Login User
Route::get('/login', [UserLoginController::class, 'showLoginForm'])->name('user.login');
Route::post('/login', [UserLoginController::class, 'login'])->name('user.login.submit');
Route::get('/favorite', [App\Http\Controllers\FavoriteController::class, 'index'])->name('favorite');
Route::get('/faq', [App\Http\Controllers\FaqController::class, 'index'])->name('faq');
Route::get('/kebijakan', [App\Http\Controllers\KebijakanController::class, 'index'])->name('kebijakan');
Route::get('/syarat', [App\Http\Controllers\SyaratController::class, 'index'])->name('syarat');
Route::get('/sejarah', [App\Http\Controllers\SejarahController::class, 'index'])->name('sejarah');
Route::middleware('auth:web')->get('/welcomeUser', [WelcomeUserController::class, 'index'])->name('welcomeUser');

// Akses Penuh Halaman User
Route::group(['middleware' => ['auth:web', 'verified']], function(){
    Route::resource('welcomeUser', WelcomeUserController::class);
    Route::get('/welcomeUser', [App\Http\Controllers\WelcomeUserController::class, 'index'])->name('welcomeUser');
    Route::get('/getHargaKamar/{id}', [KamarController::class, 'getHargaKamar']);
    Route::get('/notification', [App\Http\Controllers\NotificationController::class, 'index'])->name('notification');

    // USER SETELAH SEWA KOST
    Route::resource('user/home', UserHomeController::class);
    Route::resource('user/category', UserKategoriController::class);
    Route::resource('user/daftar', UserMenuController::class);
    Route::resource('user/peraturan', UserPeraturanController::class);
    Route::resource('user/notifikasi', UserNotifikasiController::class);
    Route::resource('user/komplain', UserKomplainController::class);
});
