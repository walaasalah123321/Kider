<?php

namespace App\Providers;

use App\Models\Contact_us;
use Illuminate\Pagination\Paginator;
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
    public function boot( ): void
    {
         view()->composer("admin.layouts.index",function($view){
             $counts=Contact_us::where("read",0)->count();
             $view->with("unread",$counts);
         });
        Paginator::useBootstrapFive();
    }
}
