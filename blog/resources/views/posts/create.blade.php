@extends('layouts/main')

@section('title')
{{ $pageTitle }}
@endsection

@section('sidebar')
@endsection

@section('content')
  <div class="container">
    <h1>Create a post</h1>

    <hr>

    <form action="/posts" method="POST">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="title">title</label>
        <input type="text" name ="title" class="form-control" id="title" placeholder="Enter title">
      </div>
      <div class="form-group">
        <label for="content">Content</label>
        <textarea name="content" id=name="content" rows="8" cols="80" placeholder= name="content"name="content"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

  </div>

@endsection
