<?php

namespace App\Providers;

use App\Interfaces\SectionInterface;
use App\Repositories\SectionRepository;
use Illuminate\Support\ServiceProvider;

class SectionProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(SectionInterface::class,SectionRepository::class);
        
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
