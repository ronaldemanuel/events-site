@extends('layouts.main')

@section('title', 'Produto')

@section('content')
    @if ($id != null)
        <p>Produto id: {{ $id }}</p>
    @else
        <p>Valor NULL</p>
    @endif
@endsection