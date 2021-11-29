<?php

session_start();

include_once("conexao.php");

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);



    $result_usuarios = "SELECT * FROM usuarios WHERE email = '$email' AND '$senha'";
    $result_usuario = mysqli_query($conexao, $result_usuarios);
    $total_usuarios = mysqli_num_rows($result_usuario);

if(mysqli_num_rows($result_usuario) < 1){
    echo "as senhas não correspondem";

}else{
    $result_usuarios = "INSERT INTO usuarios (email, senha, created) VALUES ('$email', '$senha', NOW())";
    $result_usuario = mysqli_query($conexao, $result_usuarios);
    
    
    echo "Login realizado com sucesso!";
    
    echo "<script>setTimeout(function() { window.location.href = 'sucesso.php'; }, 2000);</script>";
    

  

}

