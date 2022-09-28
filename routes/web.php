<?php

use Illuminate\Support\Facades\Route;


//Objeto 'Route' cuida de toda parte de roteamento da aplicação


Route::get('/', [\App\Http\Controllers\PrincipalController::class,'principal'])->name('site.index');
Route::get('/login', [\App\Http\Controllers\LoginController::class,'login'])->name('site.login');
Route::get('/sobre-nos', [\App\Http\Controllers\SobreNosController::class,'sobreNos'])->name('site.sobrenos');
Route::get('/rastreio', [\App\Http\Controllers\RastreioController::class,'rastreio'])->name('site.rastreio');
Route::get('/contato', [\App\Http\Controllers\ContatoController::class,'contato'])->name('site.contato');
Route::post('/contato', [\App\Http\Controllers\ContatoController::class,'contato'])->name('site.contato');
//Route::get('/login', function(){return 'Login'; })->name('site.login');


Route::prefix('/app')->group(function()
{
    Route::get('/clientes', function(){return 'Clientes'; })->name('app.clientes');
    Route::get('/fornecedores', [\App\Http\Controllers\FornecedorController::class,'index'] )->name('app.fornecedores');
    Route::get('/produtos', function(){return 'Produtos'; })->name('app.produtos');
});

Route::get('/teste/{p1}/{p2}', [\App\Http\Controllers\TesteController::class,'teste'])->name('teste');





Route::fallback(function()
{
    echo 'A rota acessada não existe. <a href="'.route('site.index').'">Clique aqui</a> para voltar à página principal.';
});


/* verbo http

Route: :get($uri, $callback)

get 
post
put
patch
delete
options

*/