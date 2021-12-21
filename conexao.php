<?php

$painel = "Painel Administrativo";

$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "drwatson";

$conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);

if(!$conexao){
    die("Falha na conexão: " . mysqli_connect_error());
}