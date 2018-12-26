@extends('layouts/main')

@section('title')
{{ $pageTitle }}
@endsection

@section('sidebar')
@endsection

@section('content')
<div class="container bg-light">


<h1>POSTS</h1>

@foreach($posts as $post)
    <a href="/posts/{{$post->id}}"> <h2>{{ $post->title }}</h2></a>
@endforeach

</div>

@endsection
