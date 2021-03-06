@extends('layouts.master')

@section('title')
    Create book
@stop

{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific stylesheets.
--}}

@section('head')
    <link href="/css/books/create.css" type='text/css' rel='stylesheet'>
@stop

@section('content')
        <h1>Create book</h1>
        <h2>Current date in local language: {{$current_date}}</h2>
@stop

{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')
    <script src="/js/books/create.js"></script>
@stop