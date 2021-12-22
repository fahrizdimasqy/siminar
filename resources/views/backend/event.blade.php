@extends('layouts/backend.backend')

@section('content')
<div class="container">
    <a href="{{route('tambah')}}" class="btn btn-primary mb-3">Tambah Event</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Judul Event</th>
      <th scope="col">Deskripsi Event</th>
      <th scope="col">Tanggal Acara</th>
      <th scope="col">Link Zoom</th>
      <th scope="col">Image</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  @foreach($events as $key => $event)
    <tr>
    <td>{{ $key+1 }}</td>
        <td>{{ $event->title }}</td>
        <td>{{ \Illuminate\Support\Str::limit($event->desc, 30) }}</td>
        <td>{{ $event->event_date }}</td>
        <td>{{ $event->link_zoom }}</td>
        <td>{{ $event->image }}</td>
        <td>
            <a href="{{route('delete', $event->id)}}" class="btn btn-danger btn-sm">Hapus</a>
            <a href="{{route('edit', $event->id)}}" class="btn btn-warning btn-sm">Edit</a>
        </td>
    </tr>
    @endforeach
    
  </tbody>
</table>
</div>
   
@endsection