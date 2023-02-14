@extends('layout')

@section('title')
    <title>Dashboard - Portfolio Site</title>
@endsection

@section('header')
    <header>Dashboard</header>
@endsection

@section('content')
    <article>
        <!-- Credit to W3Schools for progress bar code inspiration -->
        <div class="nbsa-container">
            <h2>NBSA and EC Progress</h2>
            <div class="bar-background">
                <div id="nbsa-progress-bar" class="nbsa-container main-bar">
                </div>
            </div>
            <p id="progress-bar-text"><span id="ec-count">{{ \App\Http\Controllers\DashboardController::totalEarnedEc() }}</span> of 60 EC
                (must end higher than 45 EC due to NBSA)</p>
        </div>

        <h2>Table of Exams</h2>

        <table>
            <tr>
                <th>Quartile</th>
                <th>Course</th>
                <th>EC</th>
                <th>Exam</th>
                <th>Grade</th>
            </tr>
            @foreach($grades as $grade)
                <tr>
                    <td>Quartile name</td>
                    <td>{{ $grade->course_name }}</td>
                    <td class="dashboard-number">{{ $grade->ec }}</td>
                    <td>{{ $grade->test_name }}</td>
                    <td class="dashboard-number">
                        @if($grade->best_grade)
                            {{ $grade->best_grade }}
                        @else
                            N/A
                        @endif
                    </td>
                </tr>
            @endforeach
        </table>
    </article>
@endsection
