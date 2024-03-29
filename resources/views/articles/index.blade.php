@extends('layout')

@section('title')
    <title>Blog Articles - Portfolio Site</title>
@endsection

@section('header')
    <header>Blog Articles</header>
@endsection

@section('content')
    <article>
        <p><a href="{{ route('articles.create') }}">CREATE NEW ARTICLE</a></p>

        @foreach($articles as $article)
            <div class="content">
                <div class="title">
                    <h2>
                        <a href="{{ $article->path() }}">
                            {{ $article->title }}
                        </a>
                    </h2>
                </div>

                <p>
                    <img
                        src="img/game-developer-profession.png"
                        alt="Man working on a video game."
                        class="blog-image"
                    />
                </p>

                {!! $article->excerpt !!}
            </div>

            @if($article->id !== $articles->last()->id)
                <hr>
            @endif
        @endforeach
    </article>
@endsection
