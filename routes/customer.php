<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\HtmlString;

Route::get('/customer/test', function () {
    return view('layouts.customer', [
        'slot' => new HtmlString('<div class="bg-white p-6 rounded-lg shadow-sm text-center"><h2 class="text-xl font-semibold mb-2">Selamat Datang!</h2><p class="text-gray-600 text-sm">Halaman antarmuka pesanan pelanggan telah aktif.</p></div>'),
    ]);
});
