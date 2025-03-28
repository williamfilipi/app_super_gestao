<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores = [
            0 => ['nome' => 'Fornecedor 1', 'status' => 'N', 'cnpj' => '1232', 'ddd' => '11', 'telefone' => '9999-9999'],
            1 => ['nome' => 'Fornecedor 2', 'status' => 'S', 'cnpj' => null, 'ddd' => '85', 'telefone' => '9999-9999'],
            2 => ['nome' => 'Fornecedor 3', 'status' => 'N', 'cnpj' => null, 'ddd' => '', 'telefone' => ''],
        ];

        echo isset($fornecedores[0]['cnpj']) ? 'CNPJ informado' : 'CNPJ não informado';
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
