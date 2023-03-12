<?php

namespace Modules\School\Providers;


use Illuminate\Support\ServiceProvider;
use Modules\School\Interfaces\SchoolSessionInterface;
use Modules\School\Repositories\SchoolSessionRepository;

class SchoolSessionServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(SchoolSessionInterface::class, SchoolSessionRepository::class);
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
