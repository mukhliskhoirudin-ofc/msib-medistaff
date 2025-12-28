<?php

namespace App\Providers;

use App\Models\Doctor;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive();

        //costum binding
        Route::bind('doctor', function ($value) {   //doctor diambil dari route doctor
            return Doctor::select('id', 'uuid', 'name', 'email', 'gender', 'phone', 'created_at', 'updated_at')
                ->where('uuid', $value)
                ->firstOrFail();
        });
    }
}
