<?php
require_once __DIR__ . '/../Database.php';
require_once __DIR__ . '/../model/Autor.php';

class AutorDao
{
    private $tabela = 'autor';
    private $connection;

    public function __construct()
    {
        $db               = new Database();
        $this->connection = $db->connection;
    }

    public function salvar(Autor $autor)
    {
        $sql  = "INSERT INTO $this->tabela (nome, nacionalidade, dt_nascimento) VALUES (?, ?, ?)";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute([$autor->getNome(), $autor->getNacionalidade(), $autor->getDtNascimento()]);
    }

    public function listar()
    {
        $sql  = "SELECT * FROM $this->tabela";
        $stmt = $this->connection->query($sql);
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $autores = [];
        foreach ($rows as $row) {
            $autores[] = new Autor(
                $row['nome'],
                $row['nacionalidade'],
                $row['dt_nascimento'],
                $row['id_autor']
            );
        }
        return $autores;
    }
}