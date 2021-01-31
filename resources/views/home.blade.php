@extends('layouts.app')

@section('content')


<div class="card">
    <div class="card-body">UserName :  {{ Auth::user()->name }}</div>

{{--    <img src="{{ asset('/celt.png') }}" alt="dfd">--}}
  </div>
<img src="{{ asset('/celt.png') }}" alt="dfd" style="height: 100px;width: 100px">

<img src="{{ $path }}" alt="dfd" style="height: 100px;width: 100px">



@endsection
