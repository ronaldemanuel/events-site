@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')
    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Crie seu evento</h1>
        <form action="/eventos" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="image">Imagem do Evento:</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>
            <div class="form-group">
                <label for="title">Evento:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento">
            </div>
            <div class="form-group">
                <label for="date">Data do evento:</label>
                <input type="date" name="date" id="date" class="form-control">
            </div>
            <div class="form-group">
                <label for="city">Cidade:</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento">
            </div>
            <div class="form-group">
                <label for="private">O evento é privado?</label>
                <select name="private" id="private" class="form-control">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <div class="form-group">
                <label for="description">Descrição:</label>
                <textarea name="description" id="descriptioin" class="form-control" placeholder="O que vai acontecer no evento?"></textarea>
            </div>
            <div class="form-group">
                <label for="items">Adicione itens de ifraestrutura:</label>
                <div class="form-group">
                    <input type="checkbox" name="items[]" id="cadeiras" value="Cadeiras">
                    <label for="cadeiras">Cadeiras</label>
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" id="palco" value="Palco">
                    <label for="palco">Palco</label>
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" id="cerveja-gratis" value="Cerveja grátis">
                    <label for="cerveja-gratis">Cerveja grátis</label>
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" id="cafe-gratis" value="Café grátis">
                    <label for="cafe-gratis">Café grátis</label>
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" id="open-food" value="Open food">
                    <label for="open-food">Open food</label>
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" id="brinde" value="Brinde">
                    <label for="brinde">Brinde</label>
                </div>
            </div>
            <input type="submit" value="Criar Evento" class="btn btn-primary">
        </form>
    </div>
@endsection