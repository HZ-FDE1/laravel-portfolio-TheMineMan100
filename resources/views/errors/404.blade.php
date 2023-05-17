@extends('layout')

@section ('title')
    <title>Not found</title>
@endsection

@section ('header')
    <header>Uh oh!</header>
@endsection

@section('content')
            <article class="error-text">
                <h2>
                    The page you just tried to look for <br>
                    (<a href="{{ url()->current() }}">{{ url()->current() }}</a>) <br>
                    could not be found on this website.
                </h2>
                <h4 class="error-margin-bottom">(Error 404)</h4>

                <p>The page might have been removed or had its name changed.</p>
                <p class="error-margin-bottom">If you typed the name of the site in the address bar, please check if it was spelled correctly.</p>
                <a href="/" class="error-home-button">Return to home page</a>
            </article>
@endsection
