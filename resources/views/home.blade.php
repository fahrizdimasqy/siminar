@extends('layouts.app')

@section('content')
<div class="container">
<form class="form d-flex mb-4">
    <input class="form-control form-inline" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success ml-2" type="submit">Search</button>
  </form>
        @include('components.list_event')
    </div>
 </div>
   
@endsection