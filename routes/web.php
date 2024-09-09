<?php

use App\Livewire\CreateEmployee;
use App\Livewire\CreatePosition;
use App\Livewire\Dashboard;
use App\Livewire\EditEmployee;
use App\Livewire\EditPosition;
use App\Livewire\Employee;
use App\Livewire\Position;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', Dashboard::class)->name('dashboard');

Route::get('/karyawan', Employee::class)->name('karyawan');
Route::get('/karyawan/buat', CreateEmployee::class)->name('karyawan.create');
Route::get('/karyawan/{id}/edit', EditEmployee::class)->name('karyawan.edit');

Route::get('/posisi-pekerjaan', Position::class)->name('posisi-pekerjaan');
Route::get('/posisi-pekerjaan/buat', CreatePosition::class)->name('posisi-pekerjaan.create');
Route::get('/posisi-pekerjaan/{id}/edit', EditPosition::class)->name('posisi-pekerjaan.edit');
