@extends('layout')

@section('content')
  <style media="screen">
    .form-error{
      border: 1px solid red;
    }
  </style>
  <div class="container">
    <div class="card">
      <div class="card-header" style="text-align:center;">
        New Post
      </div>
      <div class="card-body">
        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
        <form action="/posts" method="post">
          @csrf
          <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control {{($errors->first('name') ? "form-error" : "")}} " placeholder="Enter Name" value="{{ old('name') }}">
          </div>
          <div class="form-group">
            <label>Description</label>
            <textarea name="description" rows="8" cols="80" placeholder="Enter Description" class="form-control {{($errors->first('description') ? "form-error" : "")}} ">{{ old('description') }}</textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
          <a href="/posts" class="btn btn-success">Back</a>
        </form>
      </div>
    </div>
  </div>
@endsection
