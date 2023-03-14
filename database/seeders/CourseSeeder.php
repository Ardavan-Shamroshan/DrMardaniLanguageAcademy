<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $courses = [
            ['course_name' => 'Big English starter'],
            ['course_name' => 'Big English 1'],
            ['course_name' => 'Big English 2'],
            ['course_name' => 'Big English 3'],
            ['course_name' => 'Big English 4'],
            ['course_name' => 'Big English 5'],
            ['course_name' => 'Big English 6'],
            ['course_name' => 'Family And Friends 1'],
            ['course_name' => 'Family And Friends 2'],
            ['course_name' => 'Family And Friends 3'],
            ['course_name' => 'Family And Friends 4'],
            ['course_name' => 'American English File starter'],
            ['course_name' => 'American English File 1'],
            ['course_name' => 'American English File 2'],
            ['course_name' => 'American English File 3'],
            ['course_name' => 'First Friends 1'],
            ['course_name' => 'First Friends 2'],
            ['course_name' => 'First Friends 3'],
            ['course_name' => 'Pockets 1'],
            ['course_name' => 'Pockets 2'],
            ['course_name' => 'Pockets 3'],
            ['course_name' => 'Speak 1'],
            ['course_name' => 'Speak 2'],
            ['course_name' => 'Speak 3'],
            ['course_name' => 'Tiny Talk 1A'],
            ['course_name' => 'Tiny Talk 1B'],
            ['course_name' => 'Tiny Talk 2A'],
            ['course_name' => 'Tiny Talk 2B'],
            ['course_name' => 'Tiny Talk 3A'],
            ['course_name' => 'Tiny Talk 3B'],
            ['course_name' => 'TTC'],
        ];

        Course::query()->insert($courses);
    }
}
