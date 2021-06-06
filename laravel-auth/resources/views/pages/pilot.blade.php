@extends('layouts.main-layout')

@section('content')
  <main class="pilot">
    <ul>
      <h1>
        Pilot: {{$pilot -> name}} {{$pilot -> lastname}}
      </h1>

      <h1>
        Nationality: {{$pilot -> nationality}}
      </h1>

      <ul>
        @foreach ($pilot -> cars as $car)
          <li>
            <h2>Car {{$car -> id}}: </h2>
            <h4>{{$car -> name}}</h4>
            <h4>{{$car -> model}}</h4>
            <h4>{{$car -> kW}} kW</h4>
            <h2>Brand</h2>
            <h4>{{$car -> brand -> name}}</h4>
            <h4>{{$car -> brand -> nationality}}</h4>
          </li>
        @endforeach
      </ul>
    </ul>
  </main>
@endsection
