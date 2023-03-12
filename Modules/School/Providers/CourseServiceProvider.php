<?php

namespace Modules\School\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\School\Interfaces\CourseInterface;
use Modules\School\Repositories\CourseRepository;

class CourseServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register() {
        $this->app->bind(CourseInterface::class, CourseRepository::class);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides() {
        return [];
    }
}
