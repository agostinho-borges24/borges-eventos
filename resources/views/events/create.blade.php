@extends('layouts.main')

@section('title', 'Criar Eventos')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie o seu evento</h1>
    <form action="/events" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Evento:</label>
            <input type="file" class="form-control-file" id="image" name="image">
        </div>
        <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento">
        </div>
        <div class="form-group">
            <label for="">Data do evento</label>
            <input type="date" class="form-control" id="date" name="date">
        </div>
        <div class="form-group">
            <label for="city">Cidade:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento">
        </div>
        <div class="form-group">
            <label for="private">O evento é privado?:</label>
            <select name="private" id="private" class="from-control">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <div class="form-group">
            <label for="description">Evento:</label>
            <textarea name="description" id="description" class="form-control" ?
                placeholder="O que vai acontecer no evento?"></textarea>
        </div>
        <div class="form-group">
            <label for="items">Adicione itens de infraestrutura:</label>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Cadeiras"> Cadeiras
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Palco"> Palco
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Cerveja grátis"> Cerveja grátis
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Open Food"> Open Food
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Brindes"> Brindes
            </div>
        </div>
        <input type="submit" class="btn btn-primary" value="Criar Evento">
    </form>
</div>

<!-- Quando o jogo começa, o front envia uma requisição com valor apostado e o back end responde com duas coisas: o ID do jogo e um tal de ms que parece só uma string aleatória. E quando você quer sacar, a requisição de withdraw é enviada e o servidor responde só com OK:true, simples assim. E a primeira pergunta é como que o frontend sabe que o avião caiu? Porque não tem nenhuma conexão persistente avisando o cliente sobre esse crash. Não tem web socket, não tem SSE. Então de onde que vem essa informação? Como isso só pode estar sendo feito no cliente. Vamos olhar o source para ver o que tá acontecendo. Procurando pela rota do Aviator, já dá para ver no ponto D que aquele ms de resposta é na verdade um dado criptografado em AES. E a chave de criptografar tá logo ali. Colocando o break point nessa função, vamos deixar o jogo rodar e pronto. O valor descriptografado, a variável R, é literalmente o tempo em milissegundos até o avião explodir. Claro que fazer isso na mão para descobrir o tempo restante é um pouco chato e também consome o seu tempo. Então dá para ir no workspace sobrescrever o trecho do código e colocar um simplesco console.log. E aí toda vez que o jogo inicia o console mostra exatamente quanto tempo falta pro avião quebrar. E assim você nunca perde. -->

@endsection