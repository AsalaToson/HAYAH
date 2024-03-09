<?php

namespace App\Providers;


use App\Interface\DoctorsRepositoryInterface;
use App\Interface\SectionsRepositoryInterface;
use App\Repository\DoctorsRepository;
use App\Repository\SectionsRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(SectionsRepositoryInterface::class, SectionsRepository::class);
        $this->app->bind(DoctorsRepositoryInterface::class, DoctorsRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
