@extends('layouts.main')

@section('container')
  
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-8">
        <h1 class="mb-3">{{ $notif->title }}</h1>

        @if($notif->image)
        <div style="max-height: 350px; overflow:hidden;">
          <img src="{{ asset('storage/' . $notif->image) }}" alt="{{ $notif->category->name }}" class="img-fluid"> 
        </div>
        @else
          <img src="https://source.unsplash.com/1200x400?{{ $notif->category->name }}" alt="{{ $notif->category->name }}" class="img-fluid"> 
        @endif

        <article class="my-3 fs-5">
          {!! $notif->body !!}
        </article>

      <a href="/notifs" class="d-block mt-3">Back to notif</a>
      </div>
    </div>
  </div>

@endsection