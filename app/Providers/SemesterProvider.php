<?php

namespace App\Providers;

use App\Interfaces\SemesterInterface;
use App\Repositories\SemesterRepository;
use Illuminate\Support\ServiceProvider;

class SemesterProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(SemesterInterface::class,SemesterRepository::class);
        
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
