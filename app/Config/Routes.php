<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Main::index');
$routes->get('login', 'Usuario::login');
$routes->get('administracao', 'Admin::index');
$routes->get('admins', 'Usuario::admins');
$routes->get('cadlogin', 'Usuario::cadlogin');

$routes->get('produto/excluirProduto/(:num)', 'Produto::excluirProduto/$1');
$routes->get('produto/editarProduto/(:num)', 'Produto::editarProduto/$1');
$routes->post('produto/salvarProduto', 'Produto::salvarProduto');
$routes->post('produto/alterarProduto', 'Produto::alterarProduto');
$routes->post('produto/pesquisarProduto', 'Produto::pesquisarProduto');

$routes->get('pesquisa', 'Produto::pesquisaProduto');
$routes->get('cadastrar', 'Produto::cadastrarProduto');