<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Eventos</title>

        <link rel="stylesheet" href="/css/style.css">
        <script src="/js/script.js"></script>
    </head>
    <body class="antialiased">
        <h1>Usando Blade</h1>

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
    </body>
</html>
