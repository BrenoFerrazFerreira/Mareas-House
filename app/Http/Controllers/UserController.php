<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showFormCadastro(Request $request)
    {
        return view('cadastro');
    }
    public function showCarrinho(Request $request)
    {
        return view('carrinho');

    }
    public function showProduto(Request $request)
    {
        return view('produto');

    }
}
