<?php

namespace Modules\Home\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\School\Interfaces\AcademicSettingInterface;
use Modules\School\Repositories\AcademicSettingRepository;

class AcademicSettingServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(AcademicSettingInterface::class, AcademicSettingRepository::class);

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
