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

    <div class="kanban">
        <div class="afazer">
            <h4>A fazer</h4>
            <?php include "../components/tarefa.php";?>
        </div>
        <div class="fazendo">
            <h4>Fazendo</h4>
            <?php include "../components/tarefa.php";?>
        </div>
        <div class="pronto">
            <h4>Pronto</h4>
            <?php include "../components/tarefa.php";?>
        </div>
    </div>
</body>

</html>