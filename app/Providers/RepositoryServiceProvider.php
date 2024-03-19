<?php

namespace App\Providers;


use App\Interface\Admins_StaffRepositoryInterface;
use App\Interface\DoctorsRepositoryInterface;
use App\Interface\PatientsRepositoryInterface;
use App\Interface\ResourcesRepositoryInterface;
use App\Interface\SectionsRepositoryInterface;
use App\Repository\Admins_StaffRepository;
use App\Repository\DoctorsRepository;
use App\Repository\PatientsRepository;
use App\Repository\ResourcesRepository;
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
        $this->app->bind(PatientsRepositoryInterface::class, PatientsRepository::class);
        $this->app->bind(Admins_StaffRepositoryInterface::class, Admins_StaffRepository::class);
        $this->app->bind(ResourcesRepositoryInterface::class, ResourcesRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
