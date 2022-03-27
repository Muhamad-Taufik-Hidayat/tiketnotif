@extends('dashboard.layouts.main')


@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <div class="container text-center">
      <h1 class="h2">Welcome, {{ auth()->user()->name }}</h1>
    </div>
  </div>    
@endsection