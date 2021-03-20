@extends('layouts.main')

@section('title', 'Produtos')

@section('content')
    <h1>Página de produtos</h1>
    @if ($busca != "")
        <p>Está buscando por {{ $busca }}</p>
    @endif
    <a href="/">Voltar</a>
@endsection