@extends('layouts/main')

@section('title')
{{ $pageTitle }}
@endsection

@section('sidebar')
@endsection

@section('content')
    <h1>{{ $post->title }}</h1>
    <hr>
    <h2>{{ $post->content }}</h2>
@endsection
