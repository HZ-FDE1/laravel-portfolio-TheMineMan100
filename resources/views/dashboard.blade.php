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
            <p id="progress-bar-text"><span id="ec-count">{{ \App\Http\Controllers\DashboardController::totalEarnedCredits() }}</span> of 60 EC
                (must end higher than 45 EC due to NBSA)</p>
        </div>

        <h2>Table of Exams</h2>

        <table>
            <tr>
                <th>Course</th>
                <th>EC</th>
                <th>Exam</th>
                <th>Weight</th>
                <th>Grade</th>
            </tr>
            @foreach($courses as $course)
                @php $gradeCount = 0; @endphp

                @foreach($grades as $grade)
                    @if($grade->course_id === $course->id)
                        @php $gradeCount += 1; @endphp
                        <tr>
                            @if(\App\Http\Controllers\DashboardController::numberOfGradesInCourse($course->id) > 1)
                                @if($gradeCount === 1)
                                    <td
                                        rowspan="{{ \App\Http\Controllers\DashboardController::numberOfGradesInCourse($course->id) }}"
                                    >
                                        {{ $course->name }} ({{ $course->cu_code }})
                                    </td>
                                    <td
                                        class="dashboard-number"
                                        rowspan="{{ \App\Http\Controllers\DashboardController::numberOfGradesInCourse($course->id) }}"
                                    >
                                        {{ $course->credits }}
                                    </td>
                                @endif
                            @else
                                <td>{{ $course->name }} ({{ $course->cu_code }})</td>
                                <td class="dashboard-number">{{ $course->credits }}</td>
                            @endif
                            <td>{{ $grade->test_name }} [<a href="{{ route('grades.edit', $grade) }}">EDIT</a>]</td>
                            <td class="dashboard-number">{{ $grade->weighing_factor }}</td>
                            <td class="dashboard-number">
                                @if($grade->best_grade)
                                    {{ $grade->best_grade }}
                                @else
                                    N/A
                                @endif
                            </td>
                        </tr>
                    @endif
                @endforeach
            @endforeach
        </table>
    </article>
@endsection

{{--<x-app-layout>--}}
{{--    <x-slot name="header">--}}
{{--        <h2 class="font-semibold text-xl text-gray-800 leading-tight">--}}
{{--            {{ __('Dashboard') }}--}}
{{--        </h2>--}}
{{--    </x-slot>--}}

{{--    <div class="py-12">--}}
{{--        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
{{--            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">--}}
{{--                <div class="p-6 text-gray-900">--}}
{{--                    {{ __("You're logged in!") }}--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</x-app-layout>--}}
