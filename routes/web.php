<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\GajiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PegawaiController;
use Illuminate\Foundation\Auth\RegistersUsers;

use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UsersController;
use App\Models\Barang;
use App\Models\BarangMasuk;
use App\Models\Supplier;
use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('index');
// });

//LOGIN


Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::get('login', [LoginController::class, 'login']);
Route::get('register', [RegistersUsers::class, 'showRegistrationForm'])->name('register');
Route::post('logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Auth::routes();


// ADMIN
Route::get('/', [AdminController::class, 'index'])->name('admin.index')->middleware('auth');
Route::get('/home', [HomeController::class, 'index'])->name('home');
//SUPPLIER

//USERS
Route::get('/users', [UsersController::class, 'users'])->name('users')->middleware('auth')->middleware('auth');
Route::get('/users/create', [UsersController::class, 'create'])->name('admin.users.create')->middleware('auth');
Route::post('users/store', [UsersController::class, 'store'])->name('admin.users.store')->middleware('auth');
Route::post('admin/users/destroy/{id}', [UsersController::class, 'destroy'])->name('admin.users.destroy')->middleware('auth');
Route::get('/admin/user/edit/{id}', [UsersController::class, 'edit'])->name('admin.users.edit')->middleware('auth');
Route::put('/admin/users/update/{id}', [UsersController::class, 'update'])->name('admin.users.update')->middleware('auth');


//CABANG
Route::get('/users-supplier', [UsersController::class, 'usersSupplier'])->name('users.supplier')->middleware('auth');
Route::get('users/pegawai', [UsersController::class, 'usersPegawai'])->name('admin.pegawai.pegawai')->middleware('auth');
Route::get('/get-user/{id}', [UsersController::class, 'getUser'])->name('admin.gaji.getUser')->middleware('auth');


//DIVISI
Route::get('divisi', [UsersController::class, 'divisi'])->name('admin.divisi.index')->middleware('auth');

//Barang
Route::get('/barang', [BarangController::class, 'index'])->name('admin.barang.index')->middleware('auth');
Route::get('barang/create', [BarangController::class, 'create'])->name('admin.barang.create')->middleware('auth');
Route::post('admin/barang/store', [BarangController::class, 'store'])->name('admin.barang.store')->middleware('auth');
Route::get('admin/barang/edit/{user_id}', [BarangController::class, 'edit'])->name('admin.barang.edit')->middleware('auth');
Route::put('admin/barang/update/{id}', [BarangController::class, 'update'])->name('admin.barang.update')->middleware('auth');
Route::post('admin/barang/destroy/{id}', [BarangController::class, 'destroy'])->name('admin.barang.destroy')->middleware('auth');


//Barang Masuk
Route::get('barangMasuk', [AdminController::class, 'barangMasuk'])->name('admin.barangMasuk.index')->middleware('auth');
Route::get('/barang/create', [BarangController::class, 'create'])->name('admin.barang.create')->middleware('auth');

//TRANSAKSI
Route::get('admin/transaksi', [TransaksiController::class, 'index'])->name('admin.transaksi')->middleware('auth');
Route::get('admin/transaksi/create', [TransaksiController::class, 'create'])->name('admin.transaksi.create')->middleware('auth');
Route::post('admin/transaksi/store', [TransaksiController::class, 'store'])->name('admin.transaksi.store')->middleware('auth');
Route::get('admin/transaksi/edit/{id}', [TransaksiController::class, 'edit'])->name('admin.transaksi.edit')->middleware('auth');
Route::put('admin/transaksi/update/{id}', [TransaksiController::class, 'update'])->name('admin.transaksi.update');
Route::post('/admin/transaksi/destroy/{id}', [TransaksiController::class, 'destroy'])->name('admin.transaksi.destroy');



//GAJI
Route::get('admin/gaji', [GajiController::class, 'index'])->name('admin.gaji')->middleware('auth');
Route::get('gaji/create', [GajiController::class, 'create'])->name('admin.gaji.create')->middleware('auth');
Route::post('admin/gaji/store', [GajiController::class, 'store'])->name('admin.gaji.store')->middleware('auth');
Route::get('admin/gaji/edit/{id}', [GajiController::class, 'edit'])->name('admin.gaji.edit')->middleware('auth');
Route::post('admin/gaji/destroy/{id}', [GajiController::class, 'destroyGaji'])->name('admin.gaji.destroy')->middleware('auth');
Route::post('admin/gaji/update/{id}', [GajiController::class, 'update'])->name('admin.gaji.update')->middleware('auth');


//========================
//SUPPLIER
Route::get('data-titipan', [BarangMasukController::class, 'TititpanSupplier'])->name('supplier.data-titipan')->middleware('auth');
Route::get('supplier-create', [BarangMasukController::class, 'createTitipan'])->name('supplier.create')->middleware('auth');
Route::get('supplier/detail/{id}', [BarangMasukController::class, 'detailSupplier'])->name('supplier.detail')->middleware('auth');
Route::post('supplier/store', [BarangMasukController::class, 'storeTitipan'])->name('supplier.store')->middleware('auth');
Route::post('suppliier/titipan/delete{id}', [BarangMasukController::class, 'deleteBarang'])->name('supplier.barang.delete')->middleware('auth');
Route::get('supplier/edit/{id}', [BarangMasukController::class, 'editSupplier'])->name('supplier.edit')->middleware('auth');
Route::post('supplier/titipan/update/{id}', [BarangMasukController::class, 'update'])->name('supplier.titipan.update')->middleware('auth');

//=========================
//PEGAWAI

Route::get('dashboard', [PegawaiController::class, 'dashboard'])->name('pegawai.dashboard')->middleware('auth');
//data
Route::get('pegawai/data', [PegawaiController::class, 'data'])->name('pegawai.data')->middleware('auth');
//gaji
Route::get('pegawai/gaji', [PegawaiController::class, 'gaji'])->name('pegawai.gaji.index')->middleware('auth');
//transaksi
Route::get('pegawai/transaksi', [PegawaiController::class, 'transaksi'])->name('pegawai.transaksi.index')->middleware('auth');
Route::get('pegawai/transaksi/create', [PegawaiController::class, 'createTransaksi'])->name('pegawai.transaksi.create')->middleware('auth');
