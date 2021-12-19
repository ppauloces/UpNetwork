<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

$nome = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$mensagem = addslashes($_POST['message']);
$category = addslashes($_POST['category']);

$to = "ppauloces27@gmail.com";
$assunto = "Contato - UpNetwork";
$body = "Nome: ".$nome. "\r\n" . "Email: ".$email."\r\n" . "Categoria: ".$category."\r\n". "Mensagem: ".$mensagem;

$header = "From:chegadevicio894@gmail.com"."\r\n"."Reply-To:".$email."\r\n"."X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){
    echo("Email enviado com sucesso");
}else{
    echo("O email não pode ser enviado");
}




}

?>