<?php

namespace App\Providers;

use App\Models\Brand;
use App\Models\Catalog;
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
        $catalogs = Catalog::orderBy('id')->get();
        $brands = Brand::orderBy('id')->get();
        View::share([
            'catalogs' => $catalogs,
            'brands' => $brands
        ]);
    }
}
