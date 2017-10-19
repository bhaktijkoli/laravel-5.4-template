@extends('layouts.master')
@section('pre')
@php
$title = config('app.name');
$menu_item = 'home';
@endphp
@endsection
@section('content')
<div class="container">
  <div class="jumbotron">
    <h1>Laravel 5.4 Template</h1>
    <a href="" class="btn btn-lg btn-primary">Download</a>
  </div>
</div>
@endsection
@section('post')
@endsection
