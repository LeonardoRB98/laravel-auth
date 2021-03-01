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
    <form action="{{route('admin.posts.store')}}" method="post" enctype="multipart/form-data">
        @method('POST')
        @csrf
        <div class="form-group">
            <label for="title">titolo</label>
            <input type="text" name="title" class="form-control" value="{{ old('title') }}">
           <label for="body">testo</label>
           <textarea name="body" id="body"  rows="10" class="form-control">{{ old('text') }}</textarea>
           <label for="img_path">Immagine</label>
           <input class="form-control" type="file" id="img_path" name="img_path" accept="image/*">
        </div>
        <button type="submit" class="btn btn-secondary">Sava</button>
    </form>
</div>
@endsection