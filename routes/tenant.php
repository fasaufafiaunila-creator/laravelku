<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\HtmlString;

Route::get('/tenant/test', function () {
    return view('layouts.tenant', [
        'slot' => new HtmlString('<div class="bg-white p-6 rounded shadow-sm"><h2 class="text-xl font-bold mb-2">Panel Operasional Outlet</h2><p class="text-gray-600">Sistem siap digunakan untuk menerima dan mengelola pesanan dapur.</p></div>'),
    ]);
});
