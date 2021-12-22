@extends('layouts/backend.backend')

@section('content')
    <div class="container">
    <form method="post" action="{{url('/admin/event/update', $event->id)}}" enctype="multipart/form-data">
    @csrf
  <di class="card">
    <div class="card-header">Edit Event</div>
    <div class="card-body">
    <div class="form-group">
    <label for="exampleInputEmail1">Judul</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Judul" name="title" value="{{$event->title}}" >

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">desc</label>
    <textarea type="text" class="form-control" id="exampleInputPassword1" placeholder="Deskripsi" name="desc" value="">{{$event->desc}}</textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Tanggal Acara</label>
    <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Tanggal Acara" name="event_date" value="{{$event->event_date}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Link Zoom</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Link Zoom" name="link_zoom" value="{{$event->link_zoom}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Masukan Thumbnail</label>
    <input type="file" class="form-control" name="image" value="{{$event->image}}" />
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="{{route('admin')}}" class="btn btn-warning text-white">Kembali</a>
    </div>
  </di>
</form>
    </div>
    @endsection