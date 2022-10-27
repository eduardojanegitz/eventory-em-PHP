<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Grupos de Ativos</title>
</head>

<body>
    <h1 class="title-main">Cadastro de Grupo de Ativos</h1>
    <form class="flex" action="?page=salvar-ativos" method="POST">
    <input type="hidden" name="acao-ativos" value="cadastrar-ativos">
        <label class="box-label">Descrição</label>
        <input class="box" type="text" name="description">

        <label class="box-label">Código Alternativo</label>
        <input class="box" type="text" name="alternative">

        <button class="btn" type="submit">Cadastrar</button>
    </form>

</body>

</html>