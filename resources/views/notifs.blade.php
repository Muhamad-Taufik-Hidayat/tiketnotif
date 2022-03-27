@extends('layouts.main')

@section('container')
{{-- <h1 class="mb-3 text-center">All Notification</h1> --}}

  <div class="row justify-content-center mb-3">
    <div class="col-md-6">
      <form action="/notifs">
        @if (request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}">
        @endif
        @if (request('author'))
            <input type="hidden" name="author" value="{{ request('author') }}">
        @endif
        {{-- <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
          <button class="btn btn-primary" type="submit">Search</button>
        </div> --}}
      </form>
    </div>
  </div>

  @if ($notifs->count())
  {{-- dltd --}}

  <div class="container">
    <div class="row">
      @foreach ($notifs->skip(1) as $notif)
        <div class="col-md-4 mb-3">
          <div class="card">

            @if($notif->image)
              <img src="{{ asset('storage/' . $notif->image) }}" alt="{{ $notif->category->name }}" class="img-fluid"> 
            @else
              <img class="card-img-top" src="https://source.unsplash.com/500x400?{{ $notif->category->name }}" alt="{{ $notif->category->name }}">
            @endif

            <div class="card-body">
              <h5 class="card-title">{{ $notif->title }}</h5>
              <p>
                <small class="text-muted"><a href="/notifs?author={{ $notif->author->username }}" class="text-decoration-none">{{ $notif->author->name }}</a> {{ $notif->created_at->diffForHumans() }}
                </small>
              </p>
              <p class="card-text">{{ $notif->excerpt }}</p>
              <a href="/notifs/{{ $notif->slug }}" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
      @endforeach  
    </div>
  </div>

  @else
    <p class="text-center fs-4">No Notif Found.</p>
  @endif

  <div  class="d-flex justify-content-end">
    {{ $notifs->links() }}
  </div>

@endsection


