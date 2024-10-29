<?php

use App\Http\Controllers\Auth\LoginController as AuthLoginController;
use Illuminate\Foundation\Auth\RegistersUsers;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SupplierController;

use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('index');
// });

//LOGIN
Route::get('/i', [IndexController::class, 'i'])->name('/i');

Route::get('/login', [AuthLoginController::class, 'showLoginForm'])->name('/login');
Route::get('register', [RegistersUsers::class, 'showRegistrationForm'])->name('/register');








Route::get('/', [IndexController::class, 'index'])->name('index');

//SUPPLIER
Route::get('/supplier', [SupplierController::class, 'supplier'])->name('supplier');
Route::get('/supplier/create', [SupplierController::class, 'create'])->name('supplier.create');
Route::post('/supplier/store', [SupplierController::class, 'store'])->name('supplier.store');
Route::post('/supplier/delete/{id}', [SupplierController::class, 'delete'])->name('supplier.delete');
Route::get('/supplier/edit', [SupplierController::class, 'edit'])->name('admin.supplier.edit');
Route::get('/supplier/update', [SupplierController::class, 'update'])->name('admin.supplier.update');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
