<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <link rel="stylesheet" href="/../css/style.css">
</head>
<body>
    <?php include "../components/navBar.php"; ?>
    <h1>Cadastro de Usuário</h1>

    <form action="/php/insertUsuario.php" method="post">

        <label for="">Usuário</label>
        <input type="text" name="usuario" placeholder="Nome de usuário">
        <label for="">E-mail</label>
        <input type="email" name="senha" placeholder="email">

        <button type="submit">Cadastrar</button>

    </form>
</body>
</html>