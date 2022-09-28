<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = [
            0 => [
                'nome' => 'Fornecedor 1',
                'status' => 'N',
                'cnpj' => '00',
                'ddd' => '11',
                'telefone' => '97854-1324'

            ],
            1 => [
                'nome' => 'Fornecedor 2',
                'status' => 'S',
                'cnpj' => null,
                'ddd' => '21',
                'telefone' => '96758-2544'
            ],
            2 => [
                    'nome' => 'Fornecedor 3',
                    'status' => 'S',
                    'cnpj' => null,
                    'ddd' => '48',
                    'telefone' => '98475-3215'
            ]
        ];

        $msg =  isset($fornecedores[1]['cnpj'])
            ? 'CNPJ informado.'
            : 'CNPJ não informado.';
        echo $msg;


        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
