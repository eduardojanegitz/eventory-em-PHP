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
    <link rel="icon" type="imagem/png" href="../images/logo-evecoding.png" />
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

</head>

<body>
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="../images/logo-evecoding.png" alt="Logo da Empresa - Evecoding">
                    <h2>Eve<span class="title">coding</span></h2>
                    <div class="close" id="close-btn">
                        <span class="material-symbols-outlined">
                            close
                        </span>
                    </div>
                </div>
            </div>

            <div class="sidebar">
                <a href="menu.php" class="active">
                    <span class="material-symbols-outlined" aria-corrent="page">dashboard</span>
                    <h3>Dashboard</h3>
                </a>
                <a href="?page=cadastro">
                    <span class="material-symbols-outlined">app_registration</span>
                    <h3>Cadastro de Usuários</h3>
                </a>
                <a href="?page=consultar" class="active">
                    <span class="material-symbols-outlined">list_alt</span>
                    <h3>Consultar Usuários</h3>
                </a>
                <a href="?page=cadastro-grupo-ativos">
                    <span class="material-symbols-outlined">app_registration</span>
                    <h3>Cadastro de Grupo de Ativos</h3>
                </a>
                <a href="?page=cadastro-ativos">
                    <span class="material-symbols-outlined">app_registration</span>
                    <h3>Cadastro de Ativos</h3>
                </a>
                <a href="?page=etiqueta">
                    <span class="material-symbols-outlined">app_registration</span>
                    <h3>Gerar Etiquetas</h3>
                </a>
                <a href="index.php">
                    <span class="material-symbols-outlined">logout</span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>

        <main>

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
                case "salvar-etiqueta":
                    include("../controller/salvar-etiqueta.php");
                case "editar":
                    include("editar-usuario.php");
                    break;
                case "cadastro-grupo-ativos":
                    include("cadastro-grupo-ativos.php");
                    break;
                case "cadastro-ativos":
                    include("cadastro-ativos.php");
                    break;
                case "etiqueta":
                    include("gerar-etiqueta.php");
                    break;
                default:


                    
                    
                        
                        $sql = "SELECT * FROM asset;";
                        $res = $conn->query($sql);
                        $rowcount = mysqli_num_rows($res);
                    

                    print "<h1 class='title-main'>Dashboard</h1>
                        
                        <div class='date'>
                            <input type='date'>
                        </div>

                      <div class='insights'>
                        <div class='total-ativos'>
                            <span class='material-symbols-outlined'>analytics</span>

                                <div class='middle'>
                                    <div class='left'>
                                        <h3>Total de Ativos</h3>

                                            <h1> $rowcount </h1>
                                        
                                    
                                      </div>

                                    <div class='progress'>
                                        <svg>
                                            <circle cx='38' cy='38' r='36'></circle>
                                        </svg>
                                        <div class='number'>
                                            <p>80%</p> 
                                        </div>
                                    </div>
                                </div>

                                <small class='text-muted'>Últimos 24 horas</small>
                        </div>


            <div class='total-ativos'>
                <span class='material-symbols-outlined'>analytics</span>

                <div class='middle'>

                    <div class='left'>
                        <h3>Total de Ativos</h3>
                        <h1>1000</h1>
                    </div>
                    <div class='progress'>
                        <svg>
                            <circle cx='38' cy='38' r='36'></circle>
                        </svg>
                        <div class='number'>
                        <p>70%</p>
                        
                    </div>
                    
                    </div>
                </div>
                <small class='text-muted'>Últimos 24 horas</small>
            </div>
        </div>
        
        <div class='inventarios-recentes'>
        <h2>Inventários Recentes</h2>
        <table>
            <thead>
                <tr>
                    <th>Usuário</th>
                    <th>Usuário</th>
                    <th>Usuário</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>eduardo.alves</td>
                    <td>eduardo.alves</td>
                    <td>eduardo.alves</td>
                </tr>
                <tr>
                    <td>eduardo.alves</td>
                    <td>eduardo.alves</td>
                    <td>eduardo.alves</td>
                </tr>
            </tbody>
        </table>
        <a href='#'>Mostrar tudo</a>
    </div>";
            }
            ?>


        </main>

        <div class="right">
            <div class="top">
                <button id="menu-btn">
                    <span class="material-symbols-outlined">menu</span>
                </button>
                <div class="theme-toggler">
                    <span class="material-symbols-outlined active">light_mode</span>
                    <span class="material-symbols-outlined">dark_mode</span>
                </div>
                <div class="profile">
                    <div class="info">
                        <p>Hey, <b>Evecoding</b></p>
                        <small class="text-muted">Admin</small>
                    </div>
                    <div class="profile-photo">
                        <img src="../images/logo-evecoding.png" alt="">
                    </div>
                </div>
            </div>
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