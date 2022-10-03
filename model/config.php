<?php

$usuario = 'root';
$senha = '';
$database = 'SCP';
$host = 'localhost';

$conn = new mysqli($host, $usuario, $senha, $database);

if($conn -> error) {
    die("Falha ao conectar com o banco de dados" . $conn -> error);
} 
?>