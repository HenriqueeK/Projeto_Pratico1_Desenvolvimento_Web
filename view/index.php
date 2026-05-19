<!DOCTYPE html>
<html lang="pt-br">

<style>

body {
    max-width: 800px;
    margin: auto;
    padding: 50px;
    background-color: #bfc0c7;
}

.titulo {
    text-align: center;
}

.autor{
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 10px;
    margin-top: 30px;
}

.livro{
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 10px;
    margin-top: 30px;
}
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Livros</title>
</head>
<body>
    <h1 class="titulo">Sistema de Cadastro de Livros</h1>
    <section class="autor">
        <h2>Autores</h2>
        <a href="CadastrarAutor.php">Cadastrar Autor</a>
        <br>
        <a href="ListaAutor.php">Listar Autores</a>
    </section>
    <section class="livro">
        <h2>Livros</h2>
        <a href="CadastrarLivro.php">Cadastrar Livro</a>
        <br>
        <a href="ListaLivro.php">Listar Livros</a>
    </section>
</body>
</html>