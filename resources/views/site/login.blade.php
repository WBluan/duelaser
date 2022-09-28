@extends('site.layouts.basico')
@section('titulo', 'Login')
@section('conteudo')

    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Login para Rastreamento</h1>
        </div>

        <div id="login">
            <form method="get" action="">

                <p>
                    <h2><label for="cpf_login">Seu nº de rastreio</label></h2>
                    <input  id="cpf_login" name="cpf"  type="text" placeholder="ex. DL123456789BR" style="placeholder-color: grey"/>
                </p>
                <p>
                   <h3> <label for="notafiscal">Sua Nota Fiscal</label></h3>
                    <input id="senha" name="email_login"  type="text" placeholder="ex. 9879" color: />
                </p>


                <button type="submit" class="borda-preta"><a href="{{ route('site.rastreio') }}">Rastrear</button>
                </form>










                



            @endsection
