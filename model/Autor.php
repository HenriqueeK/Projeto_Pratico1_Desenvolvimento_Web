<?php
class Autor
{
    private $id;
    private $nome;
    private $nacionalidade;
    private $dtNascimento;

    public function __construct($nome, $nacionalidade, $dtNascimento, $id = null)
    {
        $this->nome   = $nome;
        $this->nacionalidade   = $nacionalidade;
        $this->dtNascimento = $dtNascimento;
        $this->id       = $id;
    }

    public function getId()       { return $this->id; }
    public function getNome()   { return $this->nome; }
    public function getNacionalidade()   { return $this->nacionalidade; }
    public function getDtNascimento() { return $this->dtNascimento; }
}