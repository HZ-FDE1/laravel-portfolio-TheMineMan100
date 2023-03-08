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
        // Grades Quartile 1
        // Grades PCO
        DB::table('grades')->insert([
            'course_id' => 1,
            'test_name' => 'Assessment website',
            'weighing_factor' => 100,
            'best_grade' => 10.0,
            'created_at' => now()
        ]);

        // Grades CSB
        DB::table('grades')->insert([
            'course_id' => 2,
            'test_name' => 'Written exam',
            'weighing_factor' => 100,
            'best_grade' => 9.1,
            'created_at' => now()
        ]);

        // Grades Programming Basics
        DB::table('grades')->insert([
            'course_id' => 3,
            'test_name' => 'Case study exam',
            'weighing_factor' => 100,
            'best_grade' => 9.6,
            'created_at' => now()
        ]);

        // Grades Quartile 2
        // Grades OOP
        DB::table('grades')->insert([
            'course_id' => 4,
            'test_name' => 'Group assignment',
            'weighing_factor' => 50,
            'best_grade' => 8.8,
            'created_at' => now()
        ]);

        DB::table('grades')->insert([
            'course_id' => 4,
            'test_name' => 'Case study exam',
            'weighing_factor' => 50,
            'best_grade' => 10.0,
            'created_at' => now()
        ]);

        // Grades Quartile 3
        // Grades FDev 1
        DB::table('grades')->insert([
            'course_id' => 5,
            'test_name' => 'Case study exam',
            'weighing_factor' => 100,
            'created_at' => now()
        ]);

        // Grades FProj 1
        DB::table('grades')->insert([
            'course_id' => 6,
            'test_name' => 'Criterium based interview',
            'weighing_factor' => 33,
            'created_at' => now()
        ]);

        DB::table('grades')->insert([
            'course_id' => 6,
            'test_name' => 'Assignment',
            'weighing_factor' => 33,
            'created_at' => now()
        ]);

        DB::table('grades')->insert([
            'course_id' => 6,
            'test_name' => 'Case study exam',
            'weighing_factor' => 34,
            'created_at' => now()
        ]);

        // Grades Quartile 4
        // Grades FProj 2
        DB::table('grades')->insert([
            'course_id' => 7,
            'test_name' => 'Final delivery',
            'weighing_factor' => 25,
            'created_at' => now()
        ]);

        DB::table('grades')->insert([
            'course_id' => 7,
            'test_name' => 'Report of acceptance tests and optional assessments',
            'weighing_factor' => 25,
            'created_at' => now()
        ]);

        DB::table('grades')->insert([
            'course_id' => 7,
            'test_name' => 'IT Development portfolio',
            'weighing_factor' => 50,
            'created_at' => now()
        ]);

        // Other Grades
        // Grades PPD-E
        DB::table('grades')->insert([
            'course_id' => 8,
            'test_name' => 'Dutch Test',
            'weighing_factor' => 5,
            'best_grade' => 10.0,
            'created_at' => now()
        ]);

        DB::table('grades')->insert([
            'course_id' => 8,
            'test_name' => 'English Test',
            'weighing_factor' => 5,
            'created_at' => now()
        ]);

        DB::table('grades')->insert([
            'course_id' => 8,
            'test_name' => 'Criterium focused interview',
            'weighing_factor' => 90,
            'created_at' => now()
        ]);

        // Grades ITP
        // Project Week
        DB::table('grades')->insert([
            'course_id' => 9,
            'test_name' => 'Portfolio',
            'weighing_factor' => 100,
            'best_grade' => 10.0, // Says OK in Osiris
            'created_at' => now()
        ]);

        // International Week
        DB::table('grades')->insert([
            'course_id' => 10,
            'test_name' => 'Portfolio',
            'weighing_factor' => 100,
            'created_at' => now()
        ]);

        //Grades Founcation Course
        DB::table('grades')->insert([
            'course_id' => 11,
            'test_name' => 'Reading and Use of English',
            'weighing_factor' => 40,
            'created_at' => now()
        ]);

        DB::table('grades')->insert([
            'course_id' => 11,
            'test_name' => 'Writing',
            'weighing_factor' => 20,
            'created_at' => now()
        ]);

        DB::table('grades')->insert([
            'course_id' => 11,
            'test_name' => 'Listening',
            'weighing_factor' => 20,
            'created_at' => now()
        ]);

        DB::table('grades')->insert([
            'course_id' => 11,
            'test_name' => 'Speaking',
            'weighing_factor' => 20,
            'created_at' => now()
        ]);
    }
}
