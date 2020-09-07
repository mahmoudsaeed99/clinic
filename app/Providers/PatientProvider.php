<?php

namespace App\Providers;

use App\Services;
use Illuminate\Support\ServiceProvider;

class PatientProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        view()->composer('front.inc.header' , function($view){
            $view->with('services' , Services::select('id' , 'name','price')->get());
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
