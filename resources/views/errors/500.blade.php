@extends('layout')

@section ('title')
    <title>Not found</title>
@endsection

@section ('header')
    <header>Uh oh!</header>
@endsection

@section('content')
    <article class="error-text">
        <h2>There is some kind of issue on our end. We are currently working on a fix.</h2>
        <h4 class="error-margin-bottom">(Error 500)</h4>

        <p class="error-margin-bottom">If you see this page again, please try again later. We will be back as soon as possible.</p>
        <a href="/" class="error-home-button">Return to home page</a>
    </article>
@endsection
