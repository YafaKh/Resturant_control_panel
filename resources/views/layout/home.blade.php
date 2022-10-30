@extends('layout.nav')

@section('cont')
<div class="d-grid gap-2 d-md-block m-5">
    <a class="btn btn-primary" type="button" href='/customers'>Custemers</a>
    <a class="btn btn-primary" type="button" href='{{ route('listTables') }}'>Tables</a>
    <a class="btn btn-primary" type="button" href='{{ route('listmenus') }}'>Menu Categories</a>
  </div>
@endsection
@section('title')
  Restaurant &amp; Reservations
@endsection