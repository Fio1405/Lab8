<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;


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
         Gate::define('edit', function($user, $task){
             return $task->user->is($user);
         });

         Gate::define('delete', function($user, $task){
            return $task->user->is($user);
        });
    }
}
