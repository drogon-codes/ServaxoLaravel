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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        view()->composer('base', function($view) {
           $view->with('categorydata', App\catagory::all());
        });
        // $categorydata=catagory::all();
        // View::share('categorydata', $categorydata);
    }
}
