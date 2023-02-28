@extends('layout')

@section('title')
    <title>Edit FAQ - Portfolio Site</title>
@endsection

@section('header')
    <header>Edit Frequently Asked Question</header>
@endsection

@section('content')
    <article>
        <div id="wrapper">
            <div id="page" class="container">
                <form method="POST" action="{{ $faq->path() }}">
                    @csrf
                    @method('PUT')

                    <div class="field">
                        <label class="label" for="question">Question</label>

                        <div class="control">
                            <input class="input" type="text" name="question" id="question" value="{{ $faq->question }}" size="60">
                        </div>
                    </div>

                    <div class="field">
                        <label class="label" for="answer">Answer</label>

                        <div class="control">
                            <textarea name="answer" id="answer" cols="60" rows="12">{{ $faq->answer }}</textarea>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label" for="link">Link</label>

                        <div class="control">
                            <input class="input" type="text" name="link" id="link" value="{{ $faq->link }}" size="60">
                        </div>
                    </div>

                    <div class="field is-grouped">
                        <div class="control">
                            <button class="button is-link" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
                <form method="POST" action="{{ $faq->path() }}">
                    @csrf
                    @method('DELETE')
                    <div class="control">
                        <button class="button is-link" type="submit">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </article>
@endsection
