@extends('layouts.main')

@section('container')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1>{{ $posts->title }}</h1>
        <small>Tanggal: {{ $posts->created_at }}</small>
        <p>{{ $posts->description }}</p>
        <a href="/posts/{{$posts->id}}/edit" class="btn btn-primary">Edit</a>

        <form action="{{ route('posts.destroy', $posts->id) }}" method="POST">
        @method('DELETE')
        {{ csrf_field() }}
        <!-- <input type="hidden" name="id" value="{{ $posts->id }}"> --><br />
        <button type="submit" class="btn btn-danger">Delete</button>
        </form>

    </div>
</div>

@endsection