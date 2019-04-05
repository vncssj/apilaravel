<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorias;
class CategoriasController extends Controller
{
    public function index()
    {
        $categorias = Categorias::all();
        return view("Categorias.index",[
            "categorias" => $categorias
        ]);
    }
    public function add()
    {
        return view("Categorias.add");
    }
    public function saveAdd(Request $request)
    {
        if(Categorias::create($request->all())){
        return view("Categorias.index")->with("message: Categoria Adicionada com Sucesso!");
        }
    }
}