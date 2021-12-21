<?php
@session_start();
include_once("conexao.php");

if((isset($_POST['emailusu'])) && (isset($_POST['senhausu']))){



    $email = mysqli_real_escape_string($conexao, $_POST['emailusu']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senhausu']);
    //$senha = md5($senha);
    

    $sql = "SELECT id, nome, senha FROM usuarios WHERE nome = '$email' AND senha = '$senha'";
    $result = mysqli_query($conexao, $sql);
    $resultado = mysqli_fetch_assoc($result);
    $rowResult = mysqli_num_rows($result);


    if($rowResult > 0){
        $_SESSION['id_usuario'] = $resultado['id'];
        $_SESSION['nome_usuario'] = $resultado['nome'];
        //$_SESSION['nivel_usuario'] = $resultado[0];
        
        echo "<p style='text-align: center; color: green;'><br>Login realizado com sucesso<br>Redirecionando...</p>";
        echo "<script>setTimeout(function() { window.location.href = 'painel/painel.php'; }, 2000);</script>";

    }else{
        echo "<p style='text-align: center; color: red;'><br>Email ou senha inválidos</p>";
    }

}else{
    echo "Acesso negado";
    header("Location: ../index.php");
}
?>