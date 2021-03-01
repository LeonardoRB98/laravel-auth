@extends('layouts.app')
@section('content')
<h1>il mio Blog</h1>
<div class="container">
@foreach($posts as $post)
<div class="card my-5">
    <div class="card-header">
        <h2>{{ $post->title}}</h2>
        <small>{{ $post->user->name }}</small>
    <div class="card-body">
        <p>{{ $post->body}}</p>
    </div>
</div>
@endforeach
</div>
@endsection