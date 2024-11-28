<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Main::index');
$routes->get('login', 'Usuario::login');
$routes->get('administracao', 'Usuario::administracao');
$routes->get('admins', 'Usuario::admins');
$routes->get('cadlogin', 'Usuario::cadlogin');


$routes->get('pesquisa', 'Produto::pesquisarProduto');
$routes->get('cadastrar', 'Produto::cadastrarProduto');
$routes->get('alterar', 'Produto::alterarProduto');
