<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Danhmucsp;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $data['danhmuc'] = Danhmucsp::all();
        view()->share($data);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
