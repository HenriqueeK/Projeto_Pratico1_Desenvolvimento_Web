<?php
require_once __DIR__ . '/../controller/ControlaLivro.php';

$controller   = new ControlaLivro();
$livros = $controller->listar();
?>
<style>

body {
    width: 800px;
    margin: 0 auto;
    padding: 20px;
    background-color: #9de2dc;
}

</style>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Livros</title>
</head>
<body class = body>
    <h2>Livros cadastrados</h2>
    <?php if (count($livros) > 0): ?>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Autor</th>
                    <th>Genero</th>
                    <th>Número de Paginas</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($livros as $livro): ?>
                    <tr>
                        <td><?= $livro->getId() ?></td>
                        <td><?= $livro->getTitulo() ?></td>
                        <td><?= $livro->getAutor() ?></td>   
                        <td><?= $livro->getGenero() ?></td>
                        <td><?= $livro->getNPaginas() ?></td>                 
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>Nenhum livro cadastrado.</p>
    <?php endif; ?>
    <a href="CadastrarLivro.php">Cadastrar novo livro</a>
    <br>
    <a href="PaginaPrincipal.php">Voltar para a página principal</a>
</body>
</html>