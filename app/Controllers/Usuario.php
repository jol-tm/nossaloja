<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Usuario extends BaseController
{
    public function cadlogin()
    {
        return view('templates/header') .
            view('templates/navbar') .
            view('cadlogin') .
            view('templates/footer');
    }

    public function login()
    {
        return view('templates/header') .
            view('templates/navbar') .
            view('login') .
            view('templates/footer');
    }

    public function administracao()
    {
        return view('templates/header') .
            view('templates/navbar') .
            view('administracao') .
            view('templates/footer');
    }

    public function admins()
    {
        return view('templates/header') .
            view('templates/navbar') .
            view('admins') .
            view('templates/footer');
    }
}
