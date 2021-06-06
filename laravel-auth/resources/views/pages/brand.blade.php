@extends('layouts.main-layout')

@section('content')
  <main class="brand">

    <h2>Brand name: {{$brand -> name}}</h2>
    <br>
    <h2>Brand nationality: {{$brand -> nationality}}</h2>

  </main>
@endsection
