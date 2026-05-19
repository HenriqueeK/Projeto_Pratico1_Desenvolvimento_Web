<?php

require_once __DIR__ . '/../controller/ControlaLivro.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $controller = new ControlaLivro();
    $controller->salvar();
}

?>

<style>

body {
    width: 400px;
    margin: 0 auto;
    padding: 50px;
    background-color: #9de2dc;
}

</style>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Livro</title>
</head>
<body>
    <h2>Cadastro de Livro</h2>
    <form action="" method="POST">
        <label>Título</label>
        <input type="text" name="titulo" required>
        <br>
        <label>Autor</label>
        <input type="text" name="autor" required>
        <br>
        <label>Gênero</label>
        <input type="text" name="genero" required>
        <br>
        <label>Número de Páginas</label>
        <input type="number" name="nPaginas" required>
        <br>
        <input type="submit" value="Enviar">
    </form>
    <a href="ListaLivro.php">Ver livros cadastrados</a>
    <br>
    <a href="PaginaPrincipal.php">Voltar para a página principal</a>
</body>
</html>