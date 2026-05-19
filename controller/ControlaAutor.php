<?php
require_once __DIR__ . '/../dao/AutorDao.php';


class ControlaAutor
{
    public function listar()
    {
        $dao = new AutorDao();
        return $dao->listar();
    }

    public function salvar()
    {
        $autor = new Autor(
            $_POST['nome'],
            $_POST['nacionalidade'],
            $_POST['dtNascimento']
        );

        $dao = new AutorDao();
        $dao->salvar($autor);
        header("Location: ListaAutor.php");
    }
}