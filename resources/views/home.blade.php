@extends('layouts.app')

@section('content')
<div class="container">
<form class="form d-flex mb-4" method="get" action="/admin/event/search">
    <input class="form-control form-inline" type="search" placeholder="Search" aria-label="Search" name="search" placeholder="Cari Event.." value="{{old('search')}}">
    <button class="btn btn-outline-success ml-2" type="submit">Search</button>
  </form>
        @include('components.list_event')
    </div>
 </div>
   
@endsection