<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
       
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \View::share('language',\App::currentLocale());
        \View::share('categories',\TCG\Voyager\Models\Category::with('translations')->orderby('order','asc')->get());
    }
}
