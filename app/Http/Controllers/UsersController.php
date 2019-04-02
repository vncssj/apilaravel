<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
class UsersController extends Controller
{
    public function index()
    {
        $users = Users::all();
        return view('users.index', [
            'users' => $users
        ]);
    }
    public function add()
    {
        return view('users.add');
    }
    public function saveAdd(Request $request){
        Users::create($request->all());
        $_SESSION['mensagem'] = "Usuário salvo com sucesso!";
        return view('users.add');
    }
}