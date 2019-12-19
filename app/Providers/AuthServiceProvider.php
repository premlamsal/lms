<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // returns true if user role is set to admin
        Gate::define('isAdmin', function($user) {
           return $user->user_type == 'a';
        });
    
        // define a employee user role
        // returns true if user role is set to employee
        Gate::define('isEmployee', function($user) {
            return $user->user_type == 'e';
        });
    
        // define a author user role
        // returns true if user role is set to author
        Gate::define('isKitchenStaff', function($user) {
            return $user->user_type == 'k';
        });
    }
}
