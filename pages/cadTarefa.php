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

    <h1>Cadastro de Tareras</h1>
    <form action="/php/insertUsuario.php" method="post">

        <label for="">Descrição</label>
        <input type="text" name="descricao" placeholder="Descrição da tarefa">

        <label for="">Setor</label>
        <input type="text" name="setor" placeholder="Setor a executar">

        <label for="">Prioridade</label>
        <select name="prioridade" id="">
            <option value="baixa">Baixa</option>
            <option value="media">Média</option>
            <option value="alta">Alta</option>
        </select>

        <button type="submit">Cadastrar</button>

    </form>
</body>

</html>