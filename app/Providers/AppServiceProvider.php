<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        view::composer(['partials.sidebar','lists.categories'], 'App\Http\ViewComposers\CategoryComposer');

        view()->composer('lists.roles', 'App\Http\ViewComposers\RoleComposer');

        view()->composer('partials.navbar', 'App\Http\ViewComposers\PageComposer');

        view()->composer('partials.sidebar', 'App\Http\ViewComposers\CommentComposer');

        \Blade::if('admin', function () {
            return auth()->check() && auth()->user()->isAdmin();
        });    

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