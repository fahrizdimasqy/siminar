@extends('layouts/app')

@section('content')
    <div class="container">
    <form method="post" action="/actionregis" enctype="multipart/form-data">
    @csrf
  <di class="card">
    <div class="card-header">Formulir Pendaftaran</div>
    <div class="card-body">
      <div class="form-group">
        <!-- <label for="exampleInputPassword1">Nama Event</label> -->
        <input type="text" hidden class="form-control" id="exampleInputPassword1" placeholder="" name="id_event" value="{{$event->id}}">
      </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Nama Event</label>
      <input type="text" disabled class="form-control" id="exampleInputPassword1" placeholder="" name="id_event" value="{{$event->title}}">
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Email</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Email" name="email">
    </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Name</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukan Nama Lengkap" name="name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Alamat</label>
    <input type="datextte" class="form-control" id="exampleInputPassword1" placeholder="Masukan Alamat" name="address">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">No Hp</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukan No Hp" name="phone">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="{{route('index')}}" class="btn btn-warning text-white">Kembali</a>
    </div>
  </di>
</form>
    </div>
    @endsection