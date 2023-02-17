@extends('layout')

@section('title')
    <title>{{ $article->title }} - Portfolio Site</title>
@endsection

@section('header')
    <header>{{ $article->title }}</header>
@endsection

@section('div-id')
    <div id="profile-page">
@endsection

@section('content')
    <article>
        <div id="profile-text">
            <p><a href="/articles/{{ $article->id }}/edit">EDIT ARTICLE</a></p>
            {{ $article->body }}
        </div>
    </article>
@endsection

@section('figures')
    <div id="profile-figures">
        <figure id="profile-photo-figure">
            <img src="/img/MarcusProfilePictureResize2.jpg"
                 alt="Marcus looking at the camera."
                 id="profile-photo">
            <figcaption id="profile-photo-figcaption">A picture of me.</figcaption>
        </figure>
    </div>
@endsection
