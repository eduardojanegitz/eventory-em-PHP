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
    <link rel="stylesheet" href="style.php">
    <title>Evecoding</title>
    <!-- <link rel="stylesheet" href="../css/menu.css"> -->
</head>

<body id='main'>
    <div id="logo">
        <img src="../images/EveCoding-Image.png" alt="EveCoding-image">
        <h3 class="id">
            Eve  <b id='sla'>coding </b>
        </h3>

    </div>
    <div id='main'>
        <div class='cols-sample-area'>
            <div class='separator'>
                <li>
                    <a aria-corrent=" page" href="menu.php">Home</a>
                </li>
            </div>
            <div class='separator'>
                <li>
                    <a href="?page=cadastro">Cadastro de Usuários</a>
                </li>
            </div>
            <div class='separator'>
                <li>
                    <a href="?page=consultar">Consultar Usuários</a>
                </li>
            </div>

            <div class='separator'>
                <li>
                    <a href="?page=cadastro-grupo-ativos">Cadastro de Grupo de Ativos</a>
                </li>
            </div>
        </div>
        <div id='container'>
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

    </div>
</body>

</html>
<style>
    a:hover {

        background-color: #CCCCFF;
        color: blue;
    }
    .id {
        margin-top: -38px;
        position: relative;
        left: 3rem;
    }
    #sla{
        margin-left: -4px;
        color: #0818A8;
    }
    #logo {
        right: 5rem;
        width: 300px;
        height: 0px;
    }

    #logo img {
        max-width: 45px;
        max-height: 45px;
        width: auto;
        height: auto;
    }


    #main {
        height: 500px;
        background-color: #D3D3D3;
    }

    .cols-sample-area {
        top: 4rem;
        position: relative;
        width: 300px;
        height: 250px;
    }

    .separator {
        width: 250px;
        margin-top: 20px;
    }

    #container {
        height: 500px;
        width: 600px;
        float: none;
        position: relative;
        left: 10rem;
        top: -18rem;

    }