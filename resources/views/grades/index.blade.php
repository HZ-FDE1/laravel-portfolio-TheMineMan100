@extends('layout')

@section('title')
    <title>Grades - Portfolio Site</title>
@endsection

@section('header')
    <header>My Grades</header>
@endsection

@section('content')
    <article>
        <p><a href="{{ route('grades.create') }}">CREATE NEW GRADE</a></p>
        <ul>
            @foreach($grades as $grade)
                <li>{{ $grade->course_name }}</li>
                <li>{{ $grade->test_name }}</li>
                @if($grade->best_grade)
                    <li>Best grade is: {{ $grade->best_grade }}</li>
                @else
                    <li>No grade yet</li>
                @endif
                @if($grade->passed_at)
                    <li>Passed test at {{ $grade->passed_at }}</li>
                @else
                    <li>Have not passed the test yet</li>
                @endif
                <li><a href="{{ route('grades.edit', $grade) }}">EDIT GRADE</a></li>
                <br>
            @endforeach
        </ul>
    </article>
@endsection
