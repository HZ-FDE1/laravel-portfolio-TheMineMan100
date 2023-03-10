<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    protected $fillable = ['course_name', 'test_name', 'ec', 'lowest_passing_grade', 'best_grade', 'passed_at'];

    public function path()
    {
        return route('grades.show', $this);
    }

    public function addResult($result)
    {
        if ($result >= $this->best_grade) {
            $this->best_grade = $result;
        }

        $this->save();

        $this->course()->assignCredits();
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
