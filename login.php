<?php
session_start();
include_once("conexao.php");

if((isset($_POST['email'])) && (isset($_POST['senha']))){

    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);
    //$senha = md5($senha);

    if(($senha == "123") && ($email == "ppauloces27@gmail.com")){
        header("Location: sucesso.php");
    }else{
        $_SESSION['loginErro'] = "Usuário ou senha inválida";
        header("Location: loginpage.php");
    }


}else{
    $_SESSION['loginErro'] = "Usuário ou senha inválida";
    header("Location: loginpage.php");
}




/*
session_start();

include_once("conexao.php");

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);



    $result_usuarios = "SELECT email, senha FROM usuarios WHERE email = '$email' AND senha '$senha'";
    $result_usuario = mysqli_query($conexao, $result_usuarios);
    
if($result_usuario < 1){
    echo "as senhas não correspondem";

} else{
    $result_usuarios = "INSERT INTO usuarios (email, senha, created) VALUES ('$email', '$senha', NOW())";
    $result_usuario = mysqli_query($conexao, $result_usuarios);
    
    
    echo "Cadastro realizado com sucesso!";
    
    echo "<script>setTimeout(function() { window.location.href = 'sucesso.php'; }, 2000);</script>";
    

  

}

*/ 