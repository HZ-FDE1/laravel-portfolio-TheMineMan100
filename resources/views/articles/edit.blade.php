@extends('layout')

@section('title')
    <title>Update Article - Portfolio Site</title>
@endsection

@section('header')
    <header>Update Blog Article</header>
@endsection

@section('content')
    <article>
        <div id="wrapper">
            <div id="page" class="container">
                <form method="POST" action="{{ $article->path() }}">
                    @csrf
                    @method('PUT')

                    <div class="field">
                        <label class="label" for="title">Title</label>

                        <div class="control">
                            <input
                                class="input"
                                type="text"
                                name="title"
                                id="title"
                                value="{{ $article->title }}"
                                size="60">
                            @error('title')
                            <p class="help is-danger">{{ $errors->first('title') }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="field">
                        <label class="label" for="excerpt">Excerpt</label>

                        <div class="control">
                            <textarea name="excerpt" id="excerpt" cols="60" rows="6">{{ $article->excerpt }}</textarea>
                            @error('excerpt')
                            <p class="help is-danger">{{ $errors->first('excerpt') }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="field">
                        <label class="label" for="body">Body</label>

                        <div class="control">
                            <textarea name="body" id="body" cols="60" rows="12">{{ $article->body }}</textarea>
                            @error('body')
                            <p class="help is-danger">{{ $errors->first('body') }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="field is-grouped">
                        <div class="control">
                            <button class="button is-link" type="submit">Submit</button>
                        </div>

                    </div>
                </form>
                <form method="POST" action="{{ $article->path() }}">
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
