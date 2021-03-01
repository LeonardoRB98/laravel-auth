@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table table-bordered">
            <thead>
                <th>id</th>
                <th>titolo</th>
                <th>data crazione</th>
                <th>Immagine</th>
                <th></th>
            </thead>

            <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->created_at->format('d-m-Y') }}</td>
                    <td><img src=" {{asset('storage/'. $post->img_path)}}" alt=""></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection