<?php

session_start();

include('../model/config.php');

if (isset($_POST['user']) && isset($_POST['password'])) {

    function validate($data)
    {

        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $user = validate($_POST['user']);
    $password = validate($_POST['password']);

    if (empty($user)) {
        header("Location: ../view/index.php?error=Informe o seu usuário");
        exit();
    } else if (empty($password)) {
        header("Location: ../view/index.php?error=Informe a sua senha");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE usuario = '$user' AND senha = '$password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['usuario'] === $user && $row['senha'] === $password) {
                $_SESSION['usuario'] = $row['usuario'];
                $_SESSION['nome'] = $row['nome'];
                header("Location: ../view/menu.php");
                exit();
            } else {
                header("Location: ../view/index.php?error=Usuário ou senha incorretos");
                exit();
            }
        } else {
            echo "<script>alert('Usuário ou senha incorretos');</script>";
            header("Location: ../view/index.php?error=Usuário ou senha incorretos");
            exit();
        }
    }
} else {
    header("Location: ../view/index.php");
    exit();
}
