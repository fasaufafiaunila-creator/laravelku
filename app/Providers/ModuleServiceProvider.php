<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ModuleServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        // Pendaftaran service modul akan ditempatkan di sini
    }

    public function boot(): void
    {
        // Bootstrapping modul
    }
}
