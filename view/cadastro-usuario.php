<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuários</title>

</head>

<body>
    <h1 class="title-main">Cadastro de Usuários</h1>
    <form class="flex" action="?page=salvar" method="POST">
        <input type="hidden" name="acao" value="cadastrar">
        <label class="box-label">Usuário</label>
        <input class="box" type="text" name="user">

        <label class="box-label">Nome</label>
        <input class="box" type="text" name="name">

        <label class="box-label">Senha</label>
        <input class="box" type="password" name="password">

        <label class="box-label">E-mail</label>
        <input class="box" type="email" name="email">

        <label class="box-label">Departamento</label>
        <select class="box" type="text" name="department" required>
            <option value="" >Selecione o seu departamento...</option>
            <option value="TI">TI</option>
            <option value="controladoria">Controladoria</option>
            <option value="compras">Compras</option>
            <option value="portaria">Portaria</option>
        </select>
        <button class="btn" type="submit">Cadastrar</button>
        
    </form>

</body>

</html>