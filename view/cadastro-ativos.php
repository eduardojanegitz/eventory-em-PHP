<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Grupos de Ativos</title>
</head>

<body>
    <h1 class="title-main">Cadastro de Ativos</h1>
    <form class="flex" action="?page=salvar-ativos" method="POST">
    <input type="hidden" name="acao-ativos" value="cadastrar-patrimonio">
        <label class="box-label">Nota Fiscal</label>
        <input class="box" type="text" name="nf">

        <label class="box-label">Nome do Fornecedor</label>
        <input class="box" type="text" name="fornecedor">

        <label class="box-label">Valor</label>
        <input class="box" type="number" name="valor">

        <label class="box-label">Taxa de Depreciação</label>
        <input class="box" type="number" name="depreciacao">

        <button class="btn" type="submit">Cadastrar</button>
    </form>

</body>

</html>