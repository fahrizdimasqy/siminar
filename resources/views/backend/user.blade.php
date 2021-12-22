@extends('layouts/backend.backend')

@section('content')
<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Judul Event</th>
      <th scope="col">Nama Pendaftar</th>
      <th scope="col">Email</th>
      <th scope="col">Alamat</th>
      <th scope="col">No Hp</th>
    </tr>
  </thead>
  <tbody>
  @foreach($users as $key => $user)
    <tr>
    <td>{{ $key+1 }}</td>
        <td>{{ $user->title }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->address }}</td>
        <td>{{ $user->phone }}</td>
    </tr>
    @endforeach
    
  </tbody>
</table>
</div>
   
@endsection