<?php

include_once("conexao.php");

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

$senha1 = filter_input(INPUT_POST, 'senha1', FILTER_SANITIZE_STRING);


    $result_usuarios = "SELECT * FROM usuarios WHERE email = '$email'";
    $result_usuario = mysqli_query($conexao, $result_usuarios);
    $total_usuarios = mysqli_num_rows($result_usuario);

if($senha != $senha1){
    echo "as senhas não correspondem";

} else if ($total_usuarios > 0) {


echo "Já existem um usuário com este e-mail: ".$total_usuarios;
exit;

}else{
    $result_usuarios = "INSERT INTO usuarios (email, senha, created) VALUES ('$email', '$senha', NOW())";
    $result_usuario = mysqli_query($conexao, $result_usuarios);
    
    
    echo "Cadastro realizado com sucesso!";
    
    echo "<script>setTimeout(function() { window.location.href = 'index.html'; }, 2000);</script>";
    

  

}

