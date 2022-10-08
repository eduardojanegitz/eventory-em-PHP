<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuários</title>
</head>

<body>
    <h1>Cadastro de Usuários</h1>
    <form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
        <label>Usuário</label>
        <input type="text" name="user">

        <label>Nome</label>
        <input type="text" name="name">

        <label>Senha</label>
        <input type="password" name="password">

        <label>E-mail</label>
        <input type="email" name="email">

        <label>Departamento</label>
        <input type="text" name="department">

        <button type="submit">Cadastrar</button>
        </div>
    </form>

</body>

</html>