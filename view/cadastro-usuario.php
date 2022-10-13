<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuários</title>
</head>

<body>
    <h1 class='title'>Cadastro de Usuários</h1>
    <form action="?page=salvar" method="POST">
        <div class='container'>
            <div class='separatorInput'>
                <input id='input' type="hidden" name="acao" value="cadastrar">
                <label>Usuário</label>
                <input id='input' type="text" name="user">
            </div>
            <div class='separatorInput'>
                <label>Nome</label>
                <input id='input' type="text" name="name">
            </div>
            <div class='separatorInput'>
                <label>Senha</label>
                <input id='input' type="password" name="password">
            </div>
            <div class='separatorInput'>
                <label>E-mail</label>
                <input id='input' type="email" name="email">
            </div>
            <div class='separatorInput'>
                <label>Departamento</label>
                <input id='input' type="text" name="department">
            </div>
            <div class='separatorInput'>
                <button id='button' type="submit">Cadastrar</button>
            </div>

        </div>
    </form>

</body>

</html>
<style>
    .container {
        width: 180px;
        position: relative;
        left: 6rem;

    }

    .title {
        position: relative;
        left: 6rem;

    }

    .separatorInput {
        position: relative;
        margin-top: 45px;    }

    #input {
        border: 1px solid black;
        width: 450px;
        height:30px;
        border-radius: 10px;
    }
    #button {
        border: transparent;
        color: white;
        width: 150px;
        height: 35px;
        border-radius: 10px;
        background-color: #4169E1;
        
    }
</style>