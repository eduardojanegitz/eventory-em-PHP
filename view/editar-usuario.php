<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Novo Usuário</h1>
    <?php
    $sql = "SELECT * FROM usuarios WHERE id=" . $_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
    ?>

    <form action="?page=salvar" method="POST">
        <input type="hidden" name="acao" value="editar">
        <input type="hidden" name="id" value="<?php print $row->id; ?>">

        <div class="mb-3">
            <label>Nome</label>
            <input type="text" name="nome" value="<?php print $row->nome; ?>" class="form-control">
        </div>
        <div class="mb-3">
            <label>E-mail</label>
            <input type="email" name="email" value="<?php print $row->email; ?>" class="form-control">
        </div>
        <div class="mb-3">
            <label>Senha</label>
            <input type="password" name="senha" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Data de Nascimento</label>
            <input type="date" name="data_nasc" value="<?php print $row->data_nasc; ?>" class="form-control">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>
</body>

</html>