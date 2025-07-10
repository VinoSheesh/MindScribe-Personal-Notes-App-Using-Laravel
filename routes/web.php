<?php


use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

require __DIR__.'/auth.php';

// Route public untuk halaman utama
Route::get('/', function () {
    if (\Illuminate\Support\Facades\Auth::check()) {
        // Jika sudah login, redirect ke halaman utama aplikasi
        return redirect()->route('note.index');
    }
    // Jika belum login, tampilkan halaman welcome atau landing page
    return view('welcome');
})->name('home');

// Route dashboard untuk kebutuhan redirect setelah verifikasi email
Route::get('/dashboard', function () {
    return redirect()->route('note.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('note', NoteController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});