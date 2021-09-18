@extends('master')
@section('sidebar')
@parent
<p> This is home Sidebar</p>

@endsection


@section('component')
<h1>Home Page</h1>
@php
$name = 'Aryan';
echo $name;
@endphp

@endsection

<!-- <p>First Name : {{ $first_name }}</p><br>
<p>Last Name : {{$last_name}} </p><br> -->