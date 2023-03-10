<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Grade;
use App\Models\Course;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function show()
    {
        return view('dashboard', ['courses' => Course::all(), 'grades' => Grade::all()]);
    }

    public static function totalEarnedCredits()
    {
        $courses = Course::all();
        $totalCredits = 0;
        foreach ($courses as $course) {
            if ($course->passed_at) {
                $totalCredits += $course->credits;
            }
        }
        return $totalCredits;
    }

    public static function numberOfGradesInCourse($courseId)
    {
        $grades = Grade::all();
        $numberOfGradesInCourse = 0;
        foreach ($grades as $grade) {
            if ($grade->course_id === $courseId) {
                $numberOfGradesInCourse += 1;
            }
        }
        return $numberOfGradesInCourse;
    }
}
