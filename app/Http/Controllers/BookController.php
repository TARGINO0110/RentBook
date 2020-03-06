<?php namespace rentBook\Http\Controllers;

class BookController extends Controller{

    public function listarLivros(){
        return '<h1>Listagem de livros</h1>';
    }

    public function cadastrarLivros(){
        return '<h1>Cadastrar Livros</h1>';
    }

    public function editarLivros(){
        return  '<h1>Editar Livros</h1>';
    }

    public function deletarLivros(){
        return '<h1>Deletar Livros</h1>';
    }

    public function verificarLivro(){
        return '<h1>Verificar Livro</h1>';
    }
}