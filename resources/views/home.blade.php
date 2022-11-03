@extends('layouts.app')

@section('title-block')
Home
@endsection

@section('content')
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
        <a href="" class="navbar-brand">MULTISYSTEM</a>
    </div>

    <div>
    <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About us</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
  </div>
  </div>

  
</nav>

@section('aside')
@parent
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, iure.</p>
@endsection