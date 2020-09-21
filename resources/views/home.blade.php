@extends('layouts.app')

@section('content')


<h1> UserName :  {{ Auth::user()->name }}</h1>


@endsection
