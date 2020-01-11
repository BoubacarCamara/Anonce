<?php

namespace App\Providers;
Use Illuminate\Support\Facades\Schema;
use App\User;
use Illuminate\Support\Facades\Gate;

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
        Gate::define('admin',function(User $user){
            return $user->isAdmin();
        });
        Gate::define('moderator', function(User $user){
            return $user->isModerator();
        });
     
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if(config('app.env')==='production'){
            \URL::forceSchema('https');
        }
        \Illuminate\Support\Facades\Schema::defaultStringLength(191);
    }
}
