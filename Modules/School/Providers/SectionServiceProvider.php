<?php

namespace Modules\School\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\School\Interfaces\SectionInterface;
use Modules\School\Repositories\SectionRepository;

class SectionServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(SectionInterface::class, SectionRepository::class);
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
