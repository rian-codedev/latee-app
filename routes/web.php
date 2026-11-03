<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});
// ==========================================
// RUTE UNTUK LATEE PUTRA
// ==========================================
Route::name('latee.')->group(function () {
    Route::view('programs/latee/pendidikan', 'programs.latee.pendidikan')->name('programs.pendidikan');
    Route::view('programs/latee/peribadatan', 'programs.latee.peribadatan')->name('programs.peribadatan');
    Route::view('programs/latee/peminatan', 'programs.latee.peminatan')->name('programs.peminatan');
    Route::view('programs/latee/publikasi', 'programs.latee.publikasi')->name('programs.publikasi');
    Route::view('programs/latee/kesehatan', 'programs.latee.kesehatan')->name('programs.kesehatan');
    Route::view('programs/latee/ketertiban', 'programs.latee.ketertiban')->name('programs.ketertiban');
    Route::view('programs/latee/infrastruktur', 'programs.latee.infrastruktur')->name('programs.infrastruktur');
    Route::view('programs/latee/unit', 'programs.latee.unit')->name('programs.unit');
});
Route::view('blogs/show', 'blogs.show')->name('blogs.show');
Route::view('blogs/index', 'blogs.index')->name('blogs.index');

require __DIR__.'/settings.php';
