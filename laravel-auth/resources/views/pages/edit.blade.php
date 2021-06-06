@extends('layouts.main-layout')

@section('content')
  <main class="edit">
    <form method="POST" class="form" action="{{ route('update', $car -> id) }}">
      <fieldset>
        @csrf
        @method('POST')
        <legend>New Car Form</legend>
        <h3>Contact information</h2>
          <ul>
            <li>
              <label for="name">
                <span>Name: </span>
              </label>
              <input value="{{$car -> name}}" type="text" name="name" id="name">
            </li>

            <li>
              <label for="model">
                <span>Model: </span>
              </label>
              <input value="{{$car -> model}}" type="text" name="model" id="model">
            </li>

            <li>
              <label for="kW">
                <span>kW: </span>
              </label>
              <input value="{{$car -> kW}}" type="text" name="kW" id="kW">
            </li>

            <li>
              <label for="brand_id">
                <span>Brand: </span>
              </label>
              <select name="brand_id" id="brand_id">
                @foreach ($brands as $brand)
                  <option value="{{ $brand -> id }}"
                    @if ($car -> brand -> id == $brand -> id)
                      selected
                    @endif>
                    {{ $brand -> name }} , {{ $brand -> nationality }}
                  </option>
                @endforeach
              </select>
            </li>

            <li>
              <label for="pilots_id">
                <span>Pilots: </span>
              </label>
              <select name="pilots_id" id="pilots_id">
                @foreach ($pilots as $pilot)
                  <option value="{{ $pilot -> id }}"
                    @foreach ($car -> pilots as $singlePilot)
                      @if ($singlePilot -> id == $pilot -> id)
                        selected
                      @endif
                    @endforeach
                    >
                    {{ $pilot -> name }} , {{ $pilot -> lastname }}
                  </option>
                @endforeach
              </select>
            </li>

            <li>
              <input class="submit" type="submit" placeholder="CREATE">
            </li>
          </ul>

        </fieldset>
      </form>
    </main>
  @endsection
