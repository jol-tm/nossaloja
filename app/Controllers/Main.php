<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ProdutoModel;

class Main extends BaseController
{
    public function index()
    {
        $produtos = new ProdutoModel();
        return view('templates/header') .
        view('templates/navbar') .
        view('index', ['produtos' => $produtos->findAll()]) .
        view('templates/footer');
    }
}
