<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema; // <-- importa esto

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Evita el error 1071 en índices únicos con utf8mb4
        Schema::defaultStringLength(191);
    }
}
