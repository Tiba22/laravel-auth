@extends('layouts.main-layout')

@section('content')
  <main class="create">
    <form method="POST" class="form" action="{{ route('store') }}">
        @csrf
        @method('POST')
        <h1>New</h1>
          <ul>
            <li>
              <label for="name">
                <span>Name: </span>
              </label>
              <input type="text" name="name" id="name">
            </li>
            <li>
              <label for="model">
                <span>Model: </span>
              </label>
              <input type="text" name="model" id="model">
            </li>
            <li>
              <label for="kW">
                <span>kW: </span>
              </label>
              <input type="text" name="kW" id="kW">
            </li>
            <li>
              <label for="brand_id">
                <span>Brand: </span>
              </label>
              <select name="brand_id" id="brand_id">
                @foreach ($brands as $brand)
                  <option value="{{ $brand -> id }}">{{ $brand -> name }},{{ $brand -> nationality }}</option>
                @endforeach
              </select>
            </li>
            <li>
              <input class="submit" type="submit" placeholder="CREATE">
            </li>
          </ul>
      </form>
    </main>
  @endsection
