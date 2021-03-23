@extends('layouts.main')

@section('title', 'Laravel Events')

@section('content')
    @foreach($events as $event)
        <h2>{{ $event->title }}</h2>
        <p>{{ $event->description }}</p>
        <p>
            <b>Local: </b>{{ $event->city }} <br>
            @if ($event->private == 0) 
                <b>PRIVADO</b>
            @else
            <b>LIVRE</b>
            @endif
        </p>
    @endforeach
@endsection