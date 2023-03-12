<?php

namespace Modules\Home\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AcademicSettingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \Modules\Home\Entities\AcademicSetting::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'attendance_type' => 'section',
            'marks_submission_status' => 'off',
        ];
    }
}

