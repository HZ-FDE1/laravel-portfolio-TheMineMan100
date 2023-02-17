@extends('layout')

@section('title')
    <title>Create Article - Portfolio Site</title>
@endsection

@section('header')
    <header>Create New Blog Article</header>
@endsection

@section('content')
    <article>
        <div id="wrapper">
            <div id="page" class="container">
                <form method="POST" action="/articles">
                    @csrf

                    <div class="field">
                        <label class="label" for="title">Title</label>

                        <div class="control">
                            <input class="input" type="text" name="title" id="title" size="60">
                        </div>
                    </div>

                    <div class="field">
                        <label class="label" for="excerpt">Excerpt</label>

                        <div class="control">
                            <textarea name="excerpt" id="excerpt" cols="60" rows="6"></textarea>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label" for="body">Body</label>

                        <div class="control">
                            <textarea name="body" id="body" cols="60" rows="12"></textarea>
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
