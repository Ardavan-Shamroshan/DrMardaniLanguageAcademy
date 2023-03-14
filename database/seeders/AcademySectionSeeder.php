<?php

namespace Database\Seeders;

use App\Models\AcademySection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AcademySectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $academySections = [
            ['academy_section_name' => 'Boys section', 'gender' => 'boy'],
            ['academy_section_name' => 'Girls section', 'gender' => 'girl']
        ];
        AcademySection::query()->insert($academySections);
    }
}
