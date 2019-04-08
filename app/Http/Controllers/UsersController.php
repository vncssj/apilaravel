<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use App\Hash;
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

        Users::create([
        'nome' => $request->all()['nome'],
        'login' => $request->all()['login'],
        'email' => $request->all()['email'],
        'senha' => bcrypt($request->all()['senha'])
        ]);
        return view('users.add');
    }
}