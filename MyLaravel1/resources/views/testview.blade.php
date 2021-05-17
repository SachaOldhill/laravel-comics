<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Titolo</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
  </head>
  <body>
    <div class="">
      <h1>Hello world {{ $name }}</h1>
      <h2>record count = {{ count($recs) }}</h2>
      @if (count($recs) === 1)
       I have one record!
      @elseif (count($recs) > 1)
       I have multiple records!
      @else
       I don't have any records!
      @endif

      <ul>
        @foreach ($recs as $rec)
         <li>{{ $loop->iteration}} {{ $rec }}</li>
        @endforeach
      </ul>
      <p>
        @foreach ($recs as $rec)
         {{ $rec }}
         @if (!$loop->last)
         -
         @endif
        @endforeach
      </p>
      <p>
        @for ($i = 0; $i < 10 ; $i++)
           {{$i}}
           @if ($i < 9)
            -
           @endif
        @endfor
      </p>
    </div>
  </body>
</html>
