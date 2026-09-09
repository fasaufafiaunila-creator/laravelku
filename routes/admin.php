<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\HtmlString;

Route::get('/admin/test', function () {
    return view('layouts.admin', [
        'slot' => new HtmlString('<div class="bg-gray-800 p-6 rounded border border-gray-700"><h2 class="text-xl font-bold text-amber-400 mb-2">Pusat Kendali Administrasi</h2><p class="text-gray-300">Manajemen tenant, skema komisi, dan laporan terpusat.</p></div>'),
    ]);
});
