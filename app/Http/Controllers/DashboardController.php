<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Grade;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function show()
    {
        return view('dashboard', ['grades' => Grade::all()]);
    }

    public static function totalEarnedEc()
    {
        $grades = Grade::all();
        $totalEc = 0;
        foreach ($grades as $grade) {
            if ($grade->passed_at) {
                $totalEc += $grade->ec;
            }
        }
        return $totalEc;
    }
}
