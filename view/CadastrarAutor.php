<?php
require_once __DIR__ . '/../controller/ControlaAutor.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $controller = new ControlaAutor();
    $controller->salvar();
}
?>

<style>

body {
    width: 400px;
    margin: 0 auto;
    padding: 50px;
    background-color: #9c9da7;
}

</style>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Autor</title>
</head>
<body>
    <h2>Cadastro de Autor</h2>
    <form action="" method="POST" class="formulario">
        <label>Nome</label>
        <input type="text" name="nome" required>
        <br>
        <label>Nacionalidade</label>
        <input type="text" name="nacionalidade" required>
        <br>
        <label>Data de Nascimento</label>
        <input type="date" name="dtNascimento" required>
        <br>
        <input type="submit" value="Enviar">
    </form>
    <a href="ListaAutor.php">Ver autores cadastrados</a>
    <br>
    <a href="PaginaPrincipal.php">Voltar para a página principal</a>
</body>
</html>