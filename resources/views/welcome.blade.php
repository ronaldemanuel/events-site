@extends('layouts.main')

@section('title', 'Laravel Events')

@section('content')
    <h1>Usando Blade</h1>
    <a href="/produtos">Produtos</a>
    <a href="/contato">Contato</a>
    <img src="/img/banner.jpg" alt="">

    @if (2 == 2)
        <p>A condição é true</p>
    @endif

    <p>Meu nome é {{ $nome }}</p>

    @if ($nome == "José")
        <p>O nome é José</p>
    @elseif ($nome == "Ronald")
        <p>Meu nome é {{ $nome }}, tenho {{ $pesIdade }} anos, e estudo {{ $estudo }}</p>
    @else 
        <p>Nome não registrado</p>
    @endif

    @for ($i = 0; $i < count($array); $i++)
        <p>{{ $array[$i] }} - {{ $i }}</p>

        @if ($i == 2) 
            <p>O índice é 2.</p>
        @endif
    @endfor

    @foreach ($nomes as $nome)
        <p>{{ $loop->index }}</p>
        <p>{{ $nome }}</p>
    @endforeach

    @php
        $nome = "José";
        echo $nome;
    @endphp

    <!-- Comentário no HTML -->
    {{-- Comentário no Blade --}}
@endsection