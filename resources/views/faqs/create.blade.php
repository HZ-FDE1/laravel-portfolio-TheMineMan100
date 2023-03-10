@extends('layout')

@section('title')
    <title>Create FAQ - Portfolio Site</title>
@endsection

@section('header')
    <header>Create New Frequently Asked Question</header>
@endsection

@section('content')
    <article>
        <div id="wrapper">
            <div id="page" class="container">
                <form method="POST" action="{{ route('faqs.index') }}">
                    @csrf

                    <div class="field">
                        <label class="label" for="question">Question</label>

                        <div class="control">
                            <input class="input" type="text" name="question" id="question" size="60">
                        </div>
                    </div>

                    <div class="field">
                        <label class="label" for="answer">Answer</label>

                        <div class="control">
                            <textarea name="answer" id="answer" cols="60" rows="12"></textarea>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label" for="link">Link</label>

                        <div class="control">
                            <input class="textarea" type="text" name="link" id="link" size="60">
                        </div>
                    </div>

                    <div class="field is-grouped">
                        <div class="control">
                            <button class="button is-link" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </article>
@endsection
