@extends('layout')

@section('content')
  <div class="container">
    <div>
      <a href="/posts/create" class="btn btn-success">New Post</a>
    </div>
    <div class="card">
      <div class="card-header" style="text-align:center;">
        Contents
      </div>
      <div class="card-body">
        @foreach( $data as $post)
        <div>
          <h5 class="card-title">{{ $post->name }}</h5>
          <p class="card-text">{{ $post->description }}</p>
          <div class="btn-group">
            <div class="">
              <a href="/posts/{{ $post->id }}" class="btn btn-primary">View</a>
            </div>
            <div class="">
              <a href="/posts/{{ $post->id }}/edit" class="btn btn-warning">Edit</a>
            </div>
            <form action="/posts/{{$post->id}}" method="post">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">Delete</button>
            </form>
          </div>
        </div><hr>
        @endforeach
      </div>
    </div>
  </div>
@endsection
