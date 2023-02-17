@extends('layout')

@section('title')
    <title>FAQ - Portfolio Site</title>
@endsection

@section('header')
    <header>Frequently Asked Questions</header>
@endsection

@section('content')
    <article class="questions">
        <p><a href="/faqs/create">CREATE NEW FAQ</a></p>
        <ul>
            @foreach($faqs as $faq)
                <li>{{ $faq->question }}</li>
                <li>{{ $faq->answer }}</li>
                <li><a href="{{ $faq->link }}">Relevant link</a> (Links to: {{ $faq->link }})</li>
                <li><a href="/faqs/{{ $faq->id }}/edit">EDIT FAQ</a></li>
                <br>
            @endforeach
        </ul>
    </article>
@endsection
