@extends('layouts.main-layout')
@section('content')
  <h1>Hello world</h1>
  {{-- <ul>
    @foreach ($data as $dat)
      <li> {{ $dat['name'] }} --> {{ $dat['rating'] }} </li>
    @endforeach
  </ul> --}}
  @foreach ($films as $film)
    <div class="">
      <ul>
        <li> <h1>{{ $film['title'] }} </h1></li>
        <li>{{ $film['thumb'] }}</li>
        <li><p>{{ $film['description'] }}</p></li>
        <li>Price: <strong>{{ $film['price'] }}</strong></li>
        <li>Series: {{ $film['series'] }}</li>
        <li>Sales date: {{ $film['sale_date'] }}</li>
        <li>{{ $film['type'] }}</li>
        {{-- <li>{{ $film['artists'] }}</li>
        <li>{{ $film['writers'] }}</li> --}}
      </ul>
    </div>
 @endforeach
@endsection
