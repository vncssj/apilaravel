<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produtos;
use App\Categorias;
class ProdutosController extends Controller
{
    public function index(){
        $produtos = Produtos::all();
        return view('Produtos.index', [
            'produtos' => $produtos
        ]);
    }
    public function add(){
        $produtos = Produtos::all();
        $categorias = new Categorias;
        $categorias = $categorias::all();
        return view('Produtos.add', [
            'produtos' => $produtos,
            'categorias' => $categorias
        ]);
    }
    public function saveAdd(Request $request){
        Produtos::create($request->all());
        return redirect('produtos'); 
    }
}