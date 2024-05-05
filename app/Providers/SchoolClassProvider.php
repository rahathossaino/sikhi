<?php

namespace App\Providers;

use App\Interfaces\SchoolClassInterface;
use App\Repositories\SchoolClassRepository;
use Illuminate\Support\ServiceProvider;

class SchoolClassProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(SchoolClassInterface::class,SchoolClassRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
