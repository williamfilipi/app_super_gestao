<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return 'principal';
// });

//->name('') -> nomeia a rota serve para facilitar a chamada da rota, como se fosse o apelido da rota
Route::get('/', 'PrincipalController@principal')->name('site.index');
Route::get('/sobrenos', 'SobrenosController@sobreNos')->name('site.sobrenos');
Route::get('/contato', 'ContatoController@contato')->name('site.contato');
Route::post('/contato', 'ContatoController@contato')->name('site.contato');
Route::get('/login', 'LoginController@login')->name('site.login');

//Agrupa as rotas formando uma rota onde apenas pessoas em especificas terão acesso 
Route::prefix('/app')->group(function () {
    Route::get('/clientes', 'ClientesController@clientes')->name('app.clientes');
    Route::get('/fornecedores', 'FornecedorController@index')->name('app.fornecedor');
    Route::get('/produtos', 'ProdutosController@produtos')->name('app.produtos');
});

Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('teste');

Route::fallback(function () {
    echo 'A rota acessada não existe. <a href="' . route('site.index') . '">clique aqui</a> para ir para a página inicial';
});

//{mensagem?} -> ? parameter optional os parâmetros podem opcionais desde que sejam passados da direita para esquerda


// Route::get
//     ('/contato/{nome}/{categoria}', 
//     function(
//         string $nome = 'Desconhecido', 
//         int $categoria = 1 // 1 = Informação
//     ){
//     return "Estamos aqui: $nome - $categoria";
// })->where('categoria', '[0-9]+')->where('nome', '[A-Za-z]+');