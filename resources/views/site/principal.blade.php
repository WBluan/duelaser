@extends('site.layouts.basico')

@section('titulo', 'Home')
@section('conteudo')


    <div class="conteudo-destaque">

        <div class="esquerda">
            <div class="informacoes">
                <h1>Máquinas Due Laser</h1>
                <p>Máquina de corte a laser portátil para artesanato é a especialidade da Due Laser.
                <p>
                <div class="chamada">
                    <img src="{{ asset('img/check.png') }}">
                    <span class="texto-branco">Portátil.</span>
                </div>
                <div class="chamada">
                    <img src="{{ asset('img/check.png') }}">
                    <span class="texto-branco">Alta eficiência e duração.</span>
                </div>
            </div>

            <div class="video">
                <img src="{{ asset('img/player_video.jpg') }}">
            </div>
        </div>

        <div class="direita">
            <div class="contato">
                <h1>Contato</h1>
                <p>Caso tenha qualquer dúvida por favor entre em contato com nossa equipe pelo formulário abaixo.
                <p>
                    @component('site.layouts._components.form_contato', ['classe' => 'borda-branca'])
                    @endcomponent
            </div>
        </div>
    </div>
@endsection
