<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function grade()
    {
        return $this->hasMany(Grade::class);
    }

    public function assignCredits()
    {
        $totalGrade = 0;
        $amountOfGrades = 0;
        foreach ($this->grade() as $grade) {
            $amountOfGrades += 1;
            if (isset($grade->best_grade) && $grade->best_grade >= $grade->lowest_passing_grade) {
                $totalGrade += $grade->best_grade;
            }
            else {
                return 0;
            }
        }
        $averageGrade = $totalGrade / $amountOfGrades;
        if ($averageGrade >= 5.5) {
            $this->passed_at = now();
        }
    }
}
