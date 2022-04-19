<?php

//variaveis//
$nome=isset($_POST['nome'])?$_POST['nome']:"Nome invalido";
$email=isset($_POST['email'])?$_POST['email']:"Email invalido";
$txt=isset($_POST['txt'])?$_POST['txt']:"Digite uma mensagem valida";
$assunto=isset($_POST['assunto'])?$_POST['assunto']:"Informa um assunto valido";


//Arquivo//
$arquivo = "
    <html>
      <p><b>Nome: </b>$nome</p>
      <p><b>E-mail: </b>$email</p>
      <p><b>Informe um assunto: </b>$assunto</p>
      <p><b>Mensagem: </b>$txt</p>
    </html>
  ";


  //destino//
  $destino = "Killshot6623@gmail.com";

  $headers  = "MIME-Version: 1.0\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1\n";
  $headers .= "From: $nome <$email>";


$envio=mail($destino, $assunto, $arquivo, $headers);
if($envio){
  echo'<script>alert("Mensagem enviada com sucesso!")</script>';
  echo "<meta http-equiv='refresh' CONTENT='0;URL=../index.html'>";
}else{
  echo '<script>alert("Erro ao enviar a mensagem! Confira os campos e tente novamente.")</script>';
  echo "<meta http-equiv='refresh' CONTENT='0;URL=../index.html'>";
}

?>