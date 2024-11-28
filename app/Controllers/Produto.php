<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Produto extends BaseController
{
    public function cadastrarProduto() {
        return view('templates/header') .
            view('templates/navbar') .
            view('cadastro') .
            view('templates/footer');
    }

    public function alterarProduto() {
        return view('templates/header') .
            view('templates/navbar') .
            view('alterar') .
            view('templates/footer');
    }

    public function pesquisarProduto() {
        return view('templates/header') .
            view('templates/navbar') .
            view('pesquisa') .
            view('templates/footer');
    }
}
