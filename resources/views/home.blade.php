@extends('layouts.app')

@section('content')


<div class="card">
    <div class="card-body">UserName :  {{ Auth::user()->name }}</div>
  </div>

@endsection
