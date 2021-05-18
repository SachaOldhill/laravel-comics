@extends('layouts.main-layout')

@section('content')
  <h1>Hello world</h1>
    {{-- <ul>
    @foreach ($data as $dat)
      <li> {{ $dat['name'] }} --> {{ $dat['rating'] }} </li>
    @endforeach
  </ul> --}}
  {{-- <div class="">
    @foreach ($data as $d)
      <a href="{{ route('elem',$loop -> index) }}">
        {{ $d['name']}}
      </a>
    @endforeach
  </div> --}}
    <div class="container_home">
      @foreach ($films as $film)
      <ul class="my_container">
        <li>
          <a href="{{ route('elem', $loop->index) }}">
            <img src="{{ asset($film['thumb']) }}" alt="">
          </a>
        </li>
        <li>
          <a href="{{ route('elem', $loop->index) }}">
            <h4>{{ $film['series'] }}</h4>
          </a>
        </li>
        {{-- <li><p>{{ $film['description'] }}</p></li>
        <li>Price: <strong>{{ $film['price'] }}</strong></li>
        <li>Series: {{ $film['series'] }}</li>
        <li>Sales date: {{ $film['sale_date'] }}</li>
        <li>{{ $film['type'] }}</li> --}}
        {{-- <li>{{ $film['artists'] }}</li>
        <li>{{ $film['writers'] }}</li> --}}
      </ul>
    @endforeach
    </div>
@endsection
