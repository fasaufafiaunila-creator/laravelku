<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ModuleServiceProvider extends ServiceProvider
{
    /**
     * Daftar modul resmi sesuai repository dosen.
     */
    protected array $modules = [
        'Admin',
        'Catalog',
        'Kitchen',
        'Ordering',
        'Payments', // Pastikan menggunakan huruf 's'
        'Reporting',
    ];

    public function register(): void
    {
        foreach ($this->modules as $module) {
            $provider = "App\\Modules\\{$module}\\{$module}ServiceProvider";

            if (class_exists($provider)) {
                $this->app->register($provider);
            }
        }
    }

    public function boot(): void
    {
        //
    }
}
