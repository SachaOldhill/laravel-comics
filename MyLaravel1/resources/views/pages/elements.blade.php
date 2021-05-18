@extends('layouts.main-layout')
@section('content')
  <h1>Hello world</h1>
    <div class="">
      <ul>
        <li> <h1>{{ $elem['title'] }} </h1></li>
        <li>{{ $elem['thumb'] }}</li>
        <li><p>{{ $elem['description'] }}</p></li>
        <li>Price: <strong>{{ $elem['price'] }}</strong></li>
        <li>Series: {{ $elem['series'] }}</li>
        <li>Sales date: {{ $elem['sale_date'] }}</li>
        <li>{{ $elem['type'] }}</li>
      </ul>
    </div>
@endsection
