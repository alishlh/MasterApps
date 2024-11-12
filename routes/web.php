<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\HomeController;
use Illuminate\Foundation\Auth\RegistersUsers;

use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UsersController;
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
Route::post('users/delete/{id}', [UsersController::class, 'delete'])->name('admin.users.delete')->middleware('auth');
Route::get('/users-supplier', [UsersController::class, 'usersSupplier'])->name('users.supplier')->middleware('auth');
Route::get('users/pegawai', [UsersController::class, 'usersPegawai'])->name('admin.pegawai.pegawai')->middleware('auth');

//Barang
Route::get('barang', [BarangController::class, 'index'])->name('admin.barang.index')->middleware('auth');

//Barang Masuk
Route::get('barangMasuk', [AdminController::class, 'barangMasuk'])->name('admin.barangMasuk.index')->middleware('auth');

//TRANSAKSI
Route::get('admin/transaksi', [TransaksiController::class, 'index'])->name('admin.transaksi')->middleware('auth');
Route::get('/transaksi/create', [TransaksiController::class, 'create'])->name('admin.transaksi.create')->middleware('auth');
Route::post('transaksi/inputBarang', [TransaksiController::class, 'inputBarang'])->name('admin.transaksi.input')->middleware('auth');




// =================================
//SUPPLIER
Route::get('data-titipan', [BarangMasukController::class, 'TititpanSupplier'])->name('supplier.data-titipan')->middleware('auth');
Route::get('supplier-create', [BarangMasukController::class, 'createTitipan'])->name('supplier.create')->middleware('auth');
Route::get('supplier/detail/{id}', [BarangMasukController::class, 'detailSupplier'])->name('supplier.detail')->middleware('auth');
Route::post('supplier/store', [BarangMasukController::class, 'storeTitipan'])->name('supplier.store')->middleware('auth');
