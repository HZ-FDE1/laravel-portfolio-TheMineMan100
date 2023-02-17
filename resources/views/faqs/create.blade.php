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
                <form method="POST" action="/faqs">
                    @csrf

                    <div class="field">
                        <label class="label" for="question">Question</label>

                        <div class="control">
                            <input class="input" type="text" name="question" id="question">
                        </div>
                    </div>

                    <div class="field">
                        <label class="label" for="answer">Answer</label>

                        <div class="control">
                            <input class="textarea" type="text" name="answer" id="answer">
                        </div>
                    </div>

                    <div class="field">
                        <label class="label" for="link">Link</label>

                        <div class="control">
                            <input class="textarea" type="text" name="link" id="link">
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
