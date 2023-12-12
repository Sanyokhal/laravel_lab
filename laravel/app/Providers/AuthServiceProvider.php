<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
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
        Gate::define('create-project', function (User $user) {
            return true;
        });
        Gate::define('show-project', function (User $user) {
            return true;
        });

        Gate::define('edit-project', function (User $user, $project) {
            if($user->role === "editor"||$user->role === "superadmin") return true;
            return $user->id === $project->creator_user_id;
        });

        Gate::define('delete-project', function (User $user, $project) {
            if($user->role === "superadmin") return true;
            return $user->id === $project->creator_user_id;
        });

    }
}
