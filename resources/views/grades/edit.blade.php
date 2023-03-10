@extends('layout')

@section('title')
    <title>Update Grade - Portfolio Site</title>
@endsection

@section('header')
    <header>Update New Grade</header>
@endsection

@section('content')
    <article>
        <div id="wrapper">
            <div id="page" class="container">
                <form method="POST" action="{{ route('grades.update', $grade) }}">
                    @csrf
                    @method('PUT')

                    <div class="field">
                        <label class="label" for="test_name">Test Name</label>

                        <div class="control">
                            <input
                                class="input"
                                type="text"
                                name="test_name"
                                id="test_name"
                                value="{{ $grade->test_name }}"
                                size="60">
                        </div>
                        @error('test_name')
                        <p class="help is-danger">{{ $errors->first('test_name') }}</p>
                        @enderror
                    </div>

                    <div class="field">
                        <label class="label" for="weighing_factor">Weighing Factor</label>

                        <div class="control">
                            <input
                                class="input"
                                type="number"
                                step="0.01"
                                name="weighing_factor"
                                id="weighing_factor"
                                min="0"
                                max="1"
                                value="{{ $grade->weighing_factor }}">
                        </div>
                        @error('test_name')
                        <p class="help is-danger">{{ $errors->first('test_name') }}</p>
                        @enderror
                    </div>

                    <div class="field">
                        <label class="label" for="lowest_passing_grade">Lowest Passing Grade</label>

                        <div class="control">
                            <input
                                class="input"
                                type="number"
                                step="0.1"
                                name="lowest_passing_grade"
                                id="lowest_passing_grade"
                                min="1"
                                max="10"
                                value="{{ $grade->lowest_passing_grade }}">
                        </div>
                    </div>

                    <div class="field">
                        <label class="label" for="best_grade">Best Grade</label>

                        <div class="control">
                            <input
                                class="input"
                                type="number"
                                name="best_grade"
                                id="best_grade"
                                min="0"
                                max="10"
                                value="{{ $grade->best_grade }}">
                        </div>
                    </div>

                    <div class="field is-grouped">
                        <div class="control">
                            <button class="button is-link" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
{{--                <form method="POST" action="{{ $grade->path() }}">--}}
{{--                    @csrf--}}
{{--                    @method('DELETE')--}}
{{--                    <div class="control">--}}
{{--                        <button class="button is-link" type="submit">Delete</button>--}}
{{--                    </div>--}}
{{--                </form>--}}
            </div>
        </div>
    </article>
@endsection
