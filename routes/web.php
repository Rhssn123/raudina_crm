<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\LeadListController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [LoginController::class, 'index']);

// Route untuk menampilkan daftar leads
Route::get('/lead-list', [LeadListController::class, 'index'])->name('leads.index'); 

// Route untuk menampilkan form tambah lead baru
Route::get('/lead-list/create', [LeadListController::class, 'create'])->name('leads.create'); 

// Route untuk menyimpan lead baru
Route::post('/lead-list', [LeadListController::class, 'store'])->name('leads.store'); 

// Route untuk memproses lead menjadi customer
Route::get('/lead-list/proses/{id}', [LeadListController::class, 'proses'])->name('leads.proses');
Route::delete('/lead-list/destroy/{id}', [LeadListController::class, 'destroy'])->name('leads.destroy');
Route::get('/lead-list/project/{id}', [LeadListController::class, 'proses'])->name('leads.project');
Route::post('/lead-list/proyek/{id}', [LeadListController::class, 'proyekStore'])->name('leads.proyekStore');


Route::get('/layanan', [LayananController::class, 'index']);
Route::get('/layanan/{id}', [LayananController::class, 'show'])->name('layanan.show');


Route::get('/project', [ProjectController::class, 'index']);
Route::get('/project/{id}', [ProjectController::class, 'show'])->name('project.show');
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::post('/register', [AuthController::class, 'store'])->name('register.store');

// Route untuk menampilkan daftar produk
Route::get('/product', [ProductController::class, 'index'])->name('product');

// Route untuk menambah produk (form)
Route::get('/product/create', [ProductController::class, 'create'])->name('products.create');

// Route untuk menghapus produk
Route::delete('/product/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

// Route untuk detail produk
Route::get('/product/{id}', [ProductController::class, 'show'])->name('products.detail');
