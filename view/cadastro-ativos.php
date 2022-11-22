<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Grupos de Ativos</title>
</head>

<body>
    


    <h1 class="title-main">Cadastro de Itens</h1>
    <form class="flex" action="?page=salvar-ativos" method="POST">
        <input type="hidden" name="acao-ativos" value="cadastrar-patrimonio">

        <label class="box-label">Grupo do Item</label>

        
        <select class="box" name="nome_fantasia">
            <option value="">Selecione</option>
            <?php

            $sql = "SELECT id_asset_group, descricao FROM asset_group ";
            
           
            
            $res = $conn->query($sql);
           

            while ($row = mysqli_fetch_assoc($res)) { ?>
                <option  value="<?php echo $row['descricao']; ?>"> <?php echo $row['descricao']; ?></option> <?php } ?>
            
        

        </select>

        <label class="box-label">Código do Grupo do Item</label>
        <input class="box" type="text" name="id_asset_group" value="<?php echo $row['id_asset_group']?>" >

        <label class="box-label">Descrição do Item</label>
        <input class="box" type="text" name="nome">

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