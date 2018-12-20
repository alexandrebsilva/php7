@extends('layouts.main')

@section('title')
Home Page
@endsection

@section('sidebar')
    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>This is my body content area.</p><br>
    <h2>Welcome back {{ $user_name }}</h2>
@endsection
