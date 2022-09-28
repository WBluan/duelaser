<h3> Fornecedor </h3>

@php
/*
if(empty($var)) {} //retorna true se a variável estiver vazia
- ''
- 0
- 0.0
- '0'
- null
- false
- array()
- $var = ''
*/

//Na sintex do php não utilizamos o ';' para encerrar os comandos.
@endphp

@isset($fornecedores)


    @forelse($fornecedores as $indice => $fornecedor)
    Iteração atual: {{ $loop->iteration}}
    <br>
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? '' }}
        <br>
        Telefone: {{ $fornecedor['ddd'] ?? '' }}
        {{ $fornecedor['telefone'] ?? '' }}
        <br>
        @switch($fornecedor['ddd'])
            @case('11')
                São Paulo - SP
            @break

            @case('21')
                Rio de janeiro - RJ
            @break

            @case('48')
                Florianópolis - SC
            @break

            @default
                Estado não identificado
        @endswitch
        <hr>
        @empty
            Não existem fornecedores cadastrados!
    @endforelse
@endisset
