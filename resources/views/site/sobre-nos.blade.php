@extends('site.layouts.basico')
@section('titulo', 'Sobre Nós')
@section('conteudo')

    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Olá, eu sou sua futura máquina</h1>
        </div>

        <div class="informacao-pagina">
            <p>Due é a Startup brasileira que desenvolveu a Due laser, a máquina de corte e marcação a laser acessível,
                versátil e fácil de usar, criando um mercado ainda inédito no Brasil.</p>
            <p>Empreender não é uma tarefa fácil, mas a Due está aqui para te ajudar!</p>
        </div>
    </div>

    <div class="rodape">
        <div class="redes-sociais">
            <h2>Redes sociais</h2>
            <img src="{{ asset('img/facebook.png') }}">
            <img src="{{ asset('img/linkedin.png') }}">
            <img src="{{ asset('img/youtube.png') }}">
        </div>
        <div class="area-contato">
            <h2>Contato</h2>
            <span>+55 48 99656-5459</span>
            <br>
            <span>contato@duelaser.com</span>
        </div>
        <div class="localizacao">
            <h2>Localização</h2>
            <img src="{{ asset('img/mapa.png') }}">
        </div>
    </div>
@endsection
