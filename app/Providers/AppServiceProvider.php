<?php

namespace App\Providers;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\ServiceProvider;

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
         URL::forceScheme('https');
     }

     // public function boot(UrlGenerator $url)
     //  {
     //      if(env('APP_ENV') !== 'local')
     //      {
     //          $url->forceSchema('https');
     //
     //      }
     //  }

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
