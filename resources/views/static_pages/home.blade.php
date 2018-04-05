@extends('layouts.default')
@section('title','Main')
@section('content')

@if (Auth::check())
  <div class="row">
    <div class="col-md-8">
      <section class="status_form">
        @include('shared._status_form')
      </section>
      <h3>Article lists:</h3>
      @include('shared._feed')
    </div>
    <aside class="col-md-4">
      <section class="user_info">
        @include('shared._user_info', ['user' => Auth::user()])
      </section>
    </aside>
  </div>
@else


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
  @endif
@stop
