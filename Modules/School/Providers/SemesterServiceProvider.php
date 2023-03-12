<?php

namespace Modules\School\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\School\Interfaces\SemesterInterface;
use Modules\School\Repositories\SemesterRepository;

class SemesterServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(SemesterInterface::class, SemesterRepository::class);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
