<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Main extends BaseController
{
    public function index()
    {
        return view('templates/header') .
               view('templates/navbar') .
               view('index') .
               view('templates/footer');
    }
}
