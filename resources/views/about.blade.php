@extends('layouts.main')

@section('container')
    <h3>Welcome to {{ $name }}</h3>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="200">
    <h5>Version 0.0.1</h5>
    <p>{{ $email }}</p>

@endsection