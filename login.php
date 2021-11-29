<?php

if(isset($_POST['submit']) && !empty($_POST['emailSession']) && !empty($_POST['senhaSession'])){

  include_once('conexao.php');
  $emaillog = $_POST['emailSession'];
  $senhalog = $_POST['senhaSession'];

  //print_r('Email: ' . $emaillog);
  //print_r('Senha: ' . $senhalog);

  $sql = "SELECT * FROM usuarios WHERE emailSession = '$emaillog' and senhaSession = '$senhalog'";

  $result = $conexao->query($sql);

  if(mysqli_num_rows($result) < 1){
    print_r("Não existe");
  }else{
   print_r("existe"); 
  }


}else{
  header('Location: login.html');
}