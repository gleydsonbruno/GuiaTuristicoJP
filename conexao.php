<?php

$host = "localhost";
$bancodedados = "login";
$usuario = "root";
$senha = "";

$mysqli = new mysqli($host, $usuario, $senha, $bancodedados);
if ($mysqli -> connect_errno) {
    die("Falha ao conectar: " . $mysqli -> connect_errno);
} 


?>