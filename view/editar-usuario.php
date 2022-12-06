<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <?php
    $sql = "SELECT * FROM users WHERE id_users=" . $_REQUEST["id_users"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
    ?>

    <h1 class="title-main">Novo Usuário</h1>


    <form class="flex" action="?page=salvar" method="POST">
        <input type="hidden" name="acao" value="editar">
        <input type="hidden" name="id" value="<?php print $row->id_users; ?>">

        
        <input class="box" type="text" name="user" placeholder="Usuário" value="<?php print $row->usuario; ?>">

       
        <input class="box" type="text" name="name" placeholder="Nome" value="<?php print $row->nome; ?>">


        <input class="box" type="email" name="email" placeholder="E-mail" value="<?php print $row->email; ?>">

        
        <select class="box" type="text" name="department" required value="<?php print $row->departamento; ?>">
            <option value="">Selecione o seu departamento...</option>
            <option value="TI">TI</option>
            <option value="controladoria">Controladoria</option>
            <option value="compras">Compras</option>
            <option value="portaria">Portaria</option>
        </select>
        
            <button type="submit" class="btn" style="height: 3rem;">Enviar</button>
        
    </form>
</body>

</html>