<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

$nome = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$mensagem = addslashes($_POST['message']);
$category = addslashes($_POST['category']);


$to = "ppauloces27@gmail.com";
$assunto = "Contato - UpNetwork";
$body = "Nome: ".$nome. "\r\n" . "Email: ".$email."\r\n" . "Categoria: ". $category ."\r\n". "Mensagem: ".$mensagem;

$header = "From:ppauloces27@gmail.com"."\r\n"."Reply-To:".$email."\r\n"."X-Mailer:PHP/".phpversion();

if(mail($to, $assunto, $body, $header)){
    echo "<p style='text-align: center; color: green;'><br>Email enviado com sucesso</p>";
}else{
    echo "<p style='text-align: center; color: red;'><br>O email não pode ser enviado</p>";
}




}

?>