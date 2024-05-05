<?php

namespace App\Providers;

use App\Interfaces\SchoolSessionInterface;
use App\Repositories\SchoolSessionRepository;
use Illuminate\Support\ServiceProvider;

class SchoolSessionProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(SchoolSessionInterface::class,SchoolSessionRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
