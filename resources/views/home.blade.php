@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{url('foders/index')}}">Foder</a><br>
    <a href="{{url('service')}}">Service</a><br>
    <a href="{{url('movie')}}">Movie</a><br>
    <a href="{{url('about')}}">About</a><br>
    <a href="{{url('portfolio')}}">portfolio</a>
</div>
@endsection
