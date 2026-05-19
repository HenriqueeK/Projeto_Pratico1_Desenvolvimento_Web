<?php
require_once __DIR__ . '/../controller/ControlaAutor.php';

$controller   = new ControlaAutor();
$autores = $controller->listar();
?>

<style>

body {
    width: 500px;
    margin: 0 auto;
    padding: 50px;
    background-color: #9c9da7;
    
}

.titulo{
    text-align: center;
}

.cadastrar{
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 10px;
    margin-top: 30px;
}

.voltarPagina{
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 10px;
}

</style>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Livros</title>
</head>
<body>
    <h2 class="titulo">Autores cadastrados</h2>
    <?php if (count($autores) > 0): ?>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Nacionalidade</th>
                    <th>Data de Nascimento</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($autores as $autor): ?>
                    <tr>
                        <td><?= $autor->getId() ?></td>
                        <td><?= $autor->getNome() ?></td>
                        <td><?= $autor->getNacionalidade() ?></td>
                        <td><?= $autor->getDtNascimento() ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>Nenhum autor cadastrado.</p>
    <?php endif; ?>
    <a href="CadastrarAutor.php" class="cadastrar">Cadastrar novo autor</a>
    <br>
    <a href="PaginaPrincipal.php" class="voltarPagina">Voltar para a página principal</a>
</body>
</html>