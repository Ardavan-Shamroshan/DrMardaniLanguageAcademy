<?php

namespace Modules\School\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\School\Interfaces\SchoolClassInterface;
use Modules\School\Repositories\SchoolClassRepository;

class SchoolClassServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(SchoolClassInterface::class, SchoolClassRepository::class);
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
