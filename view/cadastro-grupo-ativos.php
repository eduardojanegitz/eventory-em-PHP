<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Grupos de Ativos</title>
</head>

<body>
    <h1>Cadastro de Grupo de Ativos</h1>
    <form action="?page=salvar-ativos" method="POST">
    <input type="hidden" name="acao-ativos" value="cadastrar">
        <label>Descrição</label>
        <input type="text" name="description">

        <label>Código Alternativo</label>
        <input type="text" name="alternative">

        <button type="submit">Cadastrar</button>
    </form>

</body>

</html>