<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ProdutoModel;

class Admin extends BaseController
{
    public function index()
    {
        $produtos = new ProdutoModel();
        return view('templates/header') .
        view('templates/navbar') .
        view('administracao', ['produtos' => $produtos->findAll()]) .
        view('templates/footer');
    }
}
