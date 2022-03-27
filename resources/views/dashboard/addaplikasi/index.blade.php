@extends('dashboard.layouts.main')


@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Add Aplication</h1>
  </div>    

  @if(session()->has('success'))
    <div class="alert alert-success col-lg-6" role="alert">
      {{ session('success') }}
    </div>
  @endif  

  <div class="table-responsive col-lg-6">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Aplication Name</th>
          <th scope="col">Server Key</th>
          <th scope="col">Image</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($aplikasi as $apk)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $apk->name }}</td>
          <td>{{ $apk->server_key }}</td>
          <td>{{ $apk->image }}</td>
          <td>
            <a href="/dashboard/addaplikasi/{{ $apk->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
            <a href="/dashboard/addaplikasi/{{ $apk->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
            <form action="/dashboard/addaplikasi/{{ $apk->slug }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0" onclick="return confirm('Sure?');"><span data-feather="x-circle"></span></button>
            </form>
          </td>
        </tr>  
        @endforeach
      </tbody>
    </table>
  </div>

@endsection