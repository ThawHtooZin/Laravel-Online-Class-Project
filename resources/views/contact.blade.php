@extends('layout')

@section('content')
  <h2>Contact Page</h2>
  @foreach($data as $key => $value)
  {{$key . ' = ' . $value}}
  @endforeach
@endsection
