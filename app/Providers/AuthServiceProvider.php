<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Gate::define('view-notice', function ($user) {
            if ($user->role == 'User') {
                return true;
            }
            return false;
        });

        Gate::define('add-notice', function ($user) {
            if ($user->role == 'Admin') {
                return true;
            }
            return false;
        });

        Gate::define('appreciation-crud', function ($user) {
            if ($user->role == 'Admin') {
                return true;
            }
            return false;
        });

//        Gate::define('task-crud', function ($user) {
//            if ($user->role == 'Admin') {
//                return true;
//            }
//            return false;
//        });

        Gate::define('project-crud', function ($user) {
            if ($user->role == 'Admin') {
                return true;
            }
            return false;
        });

        Gate::define('holiday-crud', function ($user) {
            if ($user->role == 'Admin') {
                return true;
            }
            return false;
        });

        Gate::define('salary-crud', function ($user) {
            if ($user->role == 'Admin') {
                return true;
            }
            return false;
        });
    }
}
