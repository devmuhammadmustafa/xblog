<?php

namespace App\Providers;

use App\View\Composers\ServiceComposer;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
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
        View::composer(
            "*",
            ServiceComposer::class
        );

        Paginator::defaultView('vendor.pagination.bootstrap-4');
    }
}
