<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grades')->insert([
            'course_name' => 'Program- and Career Orientation',
            'test_name' => 'Assessment website',
            'ec' => 2.5,
            'best_grade' => 10.0,
            'passed_at' => '2022-10-18',
            'created_at' => now(),
        ]);

        DB::table('grades')->insert([
            'course_name' => 'Computer Science Basics',
            'test_name' => 'Written exam',
            'ec' => 5.0,
            'best_grade' => 9.1,
            'passed_at' => '2022-11-07',
            'created_at' => now(),
        ]);

        DB::table('grades')->insert([
            'course_name' => 'Programming Basics',
            'test_name' => 'Case study exam',
            'ec' => 5.0,
            'best_grade' => 9.6,
            'passed_at' => '2022-10-11',
            'created_at' => now(),
        ]);

        DB::table('grades')->insert([
            'course_name' => 'PPD-E Dutch Class',
            'test_name' => 'Dutch Test',
            'ec' => 12.5 * 0.05,
            'passed_at' => '2023-02-01',
            'created_at' => now(),
        ]);

        DB::table('grades')->insert([
            'course_name' => 'PPD-E Dutch Class',
            'test_name' => 'English Test',
            'ec' => 12.5 * 0.05,
            'created_at' => now(),
        ]);

        DB::table('grades')->insert([
            'course_name' => 'PPD-E Dutch Class',
            'test_name' => 'Criterium focused interview',
            'ec' => 12.5 * 0.9,
            'created_at' => now(),
        ]);

        DB::table('grades')->insert([
            'course_name' => 'IT Personality',
            'test_name' => 'IT Personality - projectweek 1',
            'ec' => 1.25,
            'passed_at' => '2022-11-04',
            'created_at' => now(),
        ]);

        DB::table('grades')->insert([
            'course_name' => 'IT Personality',
            'test_name' => 'IT Personality 1 Portfolio',
            'ec' => 1.25,
            'created_at' => now(),
        ]);

        DB::table('grades')->insert([
            'course_name' => 'Object-Oriented Programming',
            'test_name' => 'Group assignment',
            'ec' => 5.0,
            'best_grade' => 8.8,
            'passed_at' => '2023-01-24',
            'created_at' => now(),
        ]);

        DB::table('grades')->insert([
            'course_name' => 'Object-Oriented Programming',
            'test_name' => 'Case study exam',
            'ec' => 5.0,
            'best_grade' => 10.0,
            'passed_at' => '2022-12-15',
            'created_at' => now(),
        ]);

        DB::table('grades')->insert([
            'course_name' => 'Framework development 1',
            'test_name' => 'Case study exam',
            'ec' => 5.0,
            'created_at' => now(),
        ]);

        DB::table('grades')->insert([
            'course_name' => 'Framework Project 1',
            'test_name' => 'Criterium based interview',
            'ec' => 2.5,
            'created_at' => now(),
        ]);

        DB::table('grades')->insert([
            'course_name' => 'Framework Project 1',
            'test_name' => 'Assignment',
            'ec' => 2.5,
            'created_at' => now(),
        ]);

        DB::table('grades')->insert([
            'course_name' => 'Framework Project 1',
            'test_name' => 'Case study exam',
            'ec' => 2.5,
            'created_at' => now(),
        ]);

        DB::table('grades')->insert([
            'course_name' => 'Framework Project 2',
            'test_name' => 'Final delivery',
            'ec' => 2.5,
            'created_at' => now(),
        ]);

        DB::table('grades')->insert([
            'course_name' => 'Framework Project 2',
            'test_name' => 'Report of acceptance tests and optional assessments',
            'ec' => 2.5,
            'created_at' => now(),
        ]);

        DB::table('grades')->insert([
            'course_name' => 'Framework Project 2',
            'test_name' => 'IT Development portfolio',
            'ec' => 5.0,
            'created_at' => now(),
        ]);

        DB::table('grades')->insert([
            'course_name' => 'IT Personality',
            'test_name' => 'IT Personality 2 Portfolio',
            'ec' => 2.5,
            'created_at' => now(),
        ]);

        DB::table('grades')->insert([
            'course_name' => 'IT Personality',
            'test_name' => 'IT Personality International week Portfolio',
            'ec' => 2.5,
            'created_at' => now(),
        ]);
    }
}
