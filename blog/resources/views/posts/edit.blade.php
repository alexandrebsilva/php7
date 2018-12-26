@extends('layouts/main')

@section('title')
{{ $pageTitle }}
@endsection

@section('sidebar')
@endsection

@section('content')
  <div class="container">
    <h1>Update the post: {{$post->title}}</h1>
    <hr>

    <form action="/posts/{{$post->id}}" method="POST">
      {{ csrf_field() }}
      {{ method_field('PUT') }}
      <div class="form-group">
        <label for="title">title</label>
        <input type="text" value="{{$post->title}}" name ="title" class="form-control" id="title" placeholder="Enter title">
      </div>
      <div class="form-group">
        <label for="content">Content</label><br>
        <textarea name="content" id=name="content" rows="8" cols="90"  name="content">{{$post->content}}</textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

  </div>

@endsection
