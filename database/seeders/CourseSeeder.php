<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Courses Quartile 1
        DB::table('courses')->insert([
            'cu_code' => 'CU75001V3',
            'name' => 'Program- & Career Orientation',
            'credits' => 2.5,
            'passed_at' => '2022-10-18',
            'created_at' => now()
        ]);

        DB::table('courses')->insert([
            'cu_code' => 'CU75002V2',
            'name' => 'Computer Science Basics',
            'credits' => 5,
            'passed_at' => '2022-11-07',
            'created_at' => now()
        ]);

        DB::table('courses')->insert([
            'cu_code' => 'CU75003V1',
            'name' => 'Programming Basics',
            'credits' => 5,
            'passed_at' => '2022-10-11',
            'created_at' => now()
        ]);

        // Courses Quartile 2
        DB::table('courses')->insert([
            'cu_code' => 'CU75004V1',
            'name' => 'Object-Oriented Programming',
            'credits' => 5,
            'passed_at' => '2022-10-11',
            'created_at' => now()
        ]);

        // Courses Quartile 3
        DB::table('courses')->insert([
            'cu_code' => 'CU75008V1',
            'name' => 'Framework development 1',
            'credits' => 5,
            'created_at' => now()
        ]);

        DB::table('courses')->insert([
            'cu_code' => 'CU75009V4',
            'name' => 'Framework Project 1',
            'credits' => 7.5,
            'created_at' => now()
        ]);

        // Courses Quartile 4
        DB::table('courses')->insert([
            'cu_code' => 'CU75011V3',
            'name' => 'Framework Project 2',
            'credits' => 10,
            'created_at' => now()
        ]);

        // Other Courses
        DB::table('courses')->insert([
            'cu_code' => 'CU75079V1',
            'name' => 'PPD-E, Dutch Class',
            'credits' => 12.5,
            'created_at' => now()
        ]);

        DB::table('courses')->insert([
            'cu_code' => 'CU75054V1',
            'name' => 'IT Personality- projectweek 1',
            'credits' => 1.25,
            'passed_at' => '2022-11-04',
            'created_at' => now()
        ]);

        DB::table('courses')->insert([
            'cu_code' => 'CU75055V1',
            'name' => 'IT Personality International week',
            'credits' => 1.25,
            'created_at' => now()
        ]);

        DB::table('courses')->insert([
            'cu_code' => 'CU39203',
            'name' => 'Foundation Course C1',
            'credits' => 5,
            'created_at' => now()
        ]);
    }
}
