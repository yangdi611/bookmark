@extends('layouts.default')
@section('title','Main')
@section('content')
    <div class="jumbotron">
    <h1>Easy Bookmarks</h1>
    <p class="lead">
      This is bookmarks project built by Lavarel. 
    </p>
    <p>
      Enjoy it!
    </p>
    <p>
      <a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">Sign up</a>
    </p>
  </div>
@stop