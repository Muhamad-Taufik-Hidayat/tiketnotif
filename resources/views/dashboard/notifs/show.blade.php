@extends('dashboard.layouts.main')


@section('container')

<div class="container">
  <div class="row my-3">
    <div class="col-lg-8">
      <h1 class="mb-3">{{ $notif->title }}</h1>
      <h2 class="mb-3">{{ $notif->tanggal }}</h2>
      <h2 class="mb-3">{{ $notif->jam }}</h2>

      <a href="/dashboard/notifs" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all notification</a>
      <a href="/dashboard/notifs/{{ $notif->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
      <form action="/dashboard/notifs/{{ $notif->slug }}" method="post" class="d-inline">
        @method('delete')
        @csrf
        <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span> Delete</button>
      </form>

      @if($notif->image)
        <div style="max-height: 350px; overflow:hidden;">
          <img src="{{ asset('storage/' . $notif->image) }}" alt="{{ $notif->category->name }}" class="img-fluid mt-3"> 
        </div>
      @else
        <img src="https://source.unsplash.com/1200x400?{{ $notif->category->name }}" alt="{{ $notif->category->name }}" class="img-fluid mt-3"> 
      @endif


      <article class="my-3 fs-5">
        {!! $notif->body !!}
      </article>

    </div>
  </div>
</div>

@endsection