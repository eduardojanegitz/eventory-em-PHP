<?php

session_start();

if (isset($_SESSION['usuario'])) {
}

// require_once('verification.php');

// verification('login.php');

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evecoding</title>
    <!-- <link rel="stylesheet" href="../css/menu.css"> -->
</head>

<body>
    <div>
        <ul>
            <li>
                <a aria-corrent="page" href="menu.php">Home</a>
            </li>
            <li>
                <a href="?page=cadastro">Cadastro de Usuários</a>
            </li>
            <li>
                <a href="?page=consultar">Consultar Usuários</a>
            </li>
            <li>
                <a href="?page=cadastro-grupo-ativos">Cadastro de Grupo de Ativos</a>
            </li>
        </ul>
    </div>

    <div>
        <?php
        include("../model/config.php");
        switch (@$_REQUEST["page"]) {
            case "cadastro":
                include("cadastro-usuario.php");
                break;
            case "consultar":
                include("consultar-usuario.php");
                break;
            case "salvar":
                include("../controller/salvar-usuario.php");
                break;
            case "salvar-ativos": 
                include("../controller/salvar-ativos.php");
            case "editar":
                include("editar-usuario.php");
                break;
            case "cadastro-grupo-ativos":
                include("cadastro-grupo-ativos.php");
            default:
                print "Bem-vindos!";
        }
        ?>
    </div>


</body>

</html>