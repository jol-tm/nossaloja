<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProdutoModel;
use CodeIgniter\HTTP\ResponseInterface;

class Produto extends BaseController
{
    private $produtoModel;

    public function __construct(){
        $this->produtoModel = new ProdutoModel();
    }

    public function cadastrarProduto() {
        return view('templates/header') .
            view('templates/navbar') .
            view('cadastro') .
            view('templates/footer');
    }

    public function salvarProduto() {
        $img = $this->request->getFile('userfile');

        if (! $this->validate([
            'userfile' => 'uploaded[userfile]|is_image[userfile]|ext_in[userfile,jpg,jpeg,png]'
        ], [
            'userfile' => [
                'uploaded' => 'Escolha uma imagem',
                'is_image' => 'Escolha uma imagem',
                'ext_in' => 'A extensão ' . $img->getExtension() . '  é inválida!',
                'max_dims' => 'Aceito somente imagens de até 1920x1080'
            ]
        ])) {
            session()->setFlashdata('erros', $this->validator->getErrors());
            return redirect()->route('administracao');
        }

        if (! $img->hasMoved()) {

            $nomeRand = $img->getRandomName();

            $img->store('../../public/assets/uploads/', $nomeRand);
            session()->setFlashdata('sucesso', "Upload realizado com sucesso!");

            $dados = $this->request->getPost();

            $dados['imagem'] = $nomeRand;

            if ($this->produtoModel->save($dados)) {
                session()->setFlashdata('status', "Cadastro realizado com sucesso!");
                return redirect()->route('administracao');
            } 
        }
    }

    public function editarProduto($id) {
        $produto = $this->produtoModel->find($id);
        return view('templates/header') .
            view('templates/navbar') .
            view('alterar', ['produto' => $produto]) .
            view('templates/footer');
    }

    public function excluirProduto($id) {
        if ($this->produtoModel->delete($id)) {
            return redirect()->route('administracao');
        }
    }

    public function alterarProduto() {
        $img = $this->request->getFile('userfile');

        if ($img != '') {

            if (! $this->validate([
                'userfile' => 'uploaded[userfile]|is_image[userfile]|ext_in[userfile,jpg,jpeg,png]'
            ], [
                'userfile' => [
                    'uploaded' => 'Escolha uma imagem',
                    'is_image' => 'Escolha uma imagem',
                    'ext_in' => 'A extensão ' . $img->getExtension() . '  é inválida!',
                    'max_dims' => 'Aceito somente imagens de até 1920x1080'
                ]
            ])) {
                session()->setFlashdata('erros', $this->validator->getErrors());
                return redirect()->route('cadastrar');
            }

            if (! $img->hasMoved()) {

                $nomeRand = $img->getRandomName();

                $img->store('../../public/assets/uploads/', $nomeRand);
                session()->setFlashdata('sucesso', "Upload realizado com sucesso!");

                $dados = $this->request->getPost();

                $dados['imagem'] = $nomeRand;

                if ($this->produtoModel->save($dados)) {
                    session()->setFlashdata('cadastroStatus', "Cadastro realizado com sucesso!");
                    return redirect()->route('administracao');
                }
            }
        } else {
            $dados = $this->request->getPost();
            if ($this->produtoModel->update($dados['id'] , $dados)) {
                session()->setFlashdata('status', "Alteração realizado com sucesso!");
                return redirect()->route('administracao');
            }
        }
    }

    public function pesquisaProduto() {
        return view('templates/header') .
            view('templates/navbar') .
            view('pesquisa') .
            view('templates/footer');
    }

    public function buscarProduto() {
        $dados = $this->request->getPost();
        if ($dados['param'] == 1) {
            $pesquisa = $this->produtoModel->find($dados['pesquisa']);
        } else {
            $pesquisa = $this->produtoModel->like('produto', $dados['pesquisa'])->find();
        }
        return view('templates/header') .
        view('templates/navbar') .
        view('administracao', ['produtos' => $pesquisa]) .
        view('templates/footer');
    }

    public function pesquisarProduto() {
        $dados = $this->request->getPost();
        $pesquisa = $this->produtoModel->like('produto', $dados['pesquisa'])->find();

        return view('templates/header') .
        view('templates/navbar') .
        view('pesquisa', ['produtos' => $pesquisa]) .
        view('templates/footer');
    }

    public function listarProdutos() {
        $produtos = $this->produtoModel->findAll();
        return $produtos;
    }
}
