<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Fornecedor;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $fornecedor = new Fornecedor();
        $fornecedor->nome ='Fornecedor100';
        $fornecedor->site ='fornecedor100.com.br';
        $fornecedor->uf ='RJ';
        $fornecedor-> email = 'contato@fornecedor100.com.br';
        $fornecedor->save();
      
        //create
        Fornecedor::create([
            'nome' => 'Fonecedor 200',
            'site' => 'fornecedor200.com.br',
            'uf' => 'SP',
            'email' => 'contato@fornecedor200.com.br'
        ]);

        
    }
}
