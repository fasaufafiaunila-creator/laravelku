<?php

use Illuminate\Support\Facades\Route;

// Route Login (Mockup UC-19)
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Route Publik Pelanggan
Route::prefix('kantin/{canteen:slug}')
    ->name('customer.')
    ->group(base_path('routes/customer.php'));

// Route Internal Operator & Admin
Route::middleware(['auth', 'verified'])->group(function () {
    Route::prefix('tenant/{tenant:slug}')
        ->scopeBindings()
        ->name('tenant.')
        ->group(base_path('routes/tenant.php'));

    Route::prefix('admin')
        ->name('admin.')
        ->group(base_path('routes/admin.php'));
});
