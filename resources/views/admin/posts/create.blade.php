@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Crea un nuovo post</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('admin.posts.store')}}" method="post">
        @method('POST')
        @csrf
        <div class="form-group">
            <label for="title">titolo</label>
            <input type="text" name="title" class="form-control" value="{{ old('title') }}">
           <label for="body">testo</label>
           <textarea name="body" id="body"  rows="10" class="form-control">{{ old('text') }}</textarea>
        </div>
        <button type="submit" class="btn btn-secondary">Sava</button>
    </form>
</div>
@endsection