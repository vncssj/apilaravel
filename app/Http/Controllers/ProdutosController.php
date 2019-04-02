<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produtos;
class ProdutosController extends Controller
{
    public function index(){
        $produtos = Produtos::all();
        return view('Produtos.index', [
            'produtos' => $produtos
        ]);
    }
}