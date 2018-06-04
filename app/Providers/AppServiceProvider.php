<?php

namespace App\Providers;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\ServiceProvider;
use config\database;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
     public function boot(UrlGenerator $url)
      {
          // if(env('APP_ENV') !== 'local')
          // {
          //     $url->forceSchema('https');
          //     echo 'yes';
          // }

          if('default '== 'mysql-production')
          {
              $url->forceSchema('https');
              echo 'yes';
          }
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
