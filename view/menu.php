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

<body>
<div>

<div class='cols-sample-area'>
        <div id="container">
                <div id='butdrawer'>
                    <div>
                        <li>
                            <a aria-corrent=" page" href="menu.php">Home</a>
                        </li>
                    </div>
                    <div>
                        <li>
                            <a href="?page=cadastro">Cadastro de Usuários</a>
                        </li>
                    </div>
                    <div>
                        <li>
                            <a href="?page=consultar">Consultar Usuários</a>
                        </li>
                    </div>

                    <div>
                        <li>
                            <a href="?page=cadastro-grupo-ativos">Cadastro de Grupo de Ativos</a>
                        </li>
                    </div>
                </div>
            
        </div>
        <div id='container2'>
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
<script>
    function headChange(e) {
        $('#butdrawer').parent().children('h2').text(e.text);
    }
</script>
<style>
    #navpane_listbox img.e-list-img {
        padding-right: 10px;
    }

    .e-header {
        padding-top: 8px;
        padding-left: 0px;
    }

    .cols-sample-area {
        width: 150px;
        height: 250px;
        background-color: gray;
        float: none;
        border: 1px solid black;
    }

    #container {
        height: 1000px;
        width: 100px;
        position: relative;
        padding: 0px;
        overflow: hidden;
        margin: 0px;
    }

    #container2 {
        height: 250px;
        width: 200px;
        overflow: hidden;
        margin-left: 200px;
        border: 5px solid black;
    }

    .e-header {
        padding-top: 8px;
        padding-left: 0px;
    }