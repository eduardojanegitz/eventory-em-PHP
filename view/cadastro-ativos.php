<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Itens</title>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
</head>

<body>
    <script type="text/javascript">
        $(document).ready(function() {
            $("select[name='nome_fantasia']").blur(function() {
                var $id_asset_group = $("input[name='id_asset_group']");
                $.getJSON('../controller/getIdGrupo.php', {
                    nome_fantasia: $(this).val()
                }, function(json) {
                    $id_asset_group.val(json.id_asset_group);
                });
            });
        });
    </script>


    <h1 class="title-main">Cadastro de Itens</h1>
    <form class="flex" action="?page=salvar-ativos" method="POST">
        <input type="hidden" name="acao-ativos" value="cadastrar-patrimonio">

        <!-- <label class="box-label">Grupo do Item</label> -->


        <select class="box" name="nome_fantasia">
            <option value="">Selecione</option>
            <?php

            $sql = "SELECT id_asset_group, descricao FROM asset_group ";



            $res = $conn->query($sql);


            while ($row = mysqli_fetch_assoc($res)) { ?>
                <option value="<?php echo $row['descricao']; ?>"> <?php echo $row['descricao']; ?></option> <?php } ?>



        </select>

    
        <input class="box" type="text" name="id_asset_group" placeholder="Código do Grupo do Item" readonly>

      
        <input class="box" type="text" name="nome" placeholder="Descrição do Item">

        
        <input class="box" type="text" name="nf" placeholder="Nota Fiscal">

        <input class="box" type="text" name="fornecedor" placeholder="Nome do Fornecedor">

        <input class="box" type="number" name="valor" placeholder="Valor do Item">

        <input class="box" type="number" name="depreciacao" placeholder="Taxa de Depreciação" style="height: 3rem;">

        <button class="btn" type="submit" style="height: 3rem;">Cadastrar</button>
    </form>

</body>

</html>