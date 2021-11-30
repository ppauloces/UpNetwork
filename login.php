<?php
session_start();
include_once("conexao.php");

if((isset($_POST['email'])) && (isset($_POST['senha']))){

    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);
    //$senha = md5($senha);
    

    $sql = "SELECT email, senha FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $result = mysqli_query($conexao, $sql);
    $resultado = mysqli_fetch_assoc($result);
    $rowResult = mysqli_num_rows($result);

    if($rowResult > 0){
        echo "<p style='text-align: center; color: green;'><br>Login realizado com sucesso<br>Redirecionando...</p>";
        echo "<script>setTimeout(function() { window.location.href = 'sucesso.php'; }, 2000);</script>";
    }else{
        echo "<p style='text-align: center; color: red;'><br>Email ou senha inválidos</p>";
    }
    
}else{
    echo "Acesso negado";
    header("Location: loginpage.php");
}

