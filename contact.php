<?php
  // Recebendo dados do formulário
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $headers = "Content-Type: text/html;charset=utf-8\r\n";
  $headers .= "From: $email\r\n";
  $headers .= "Reply-to: $email\r\n"; 

  // Dados que serão enviados
  $body = "<strong>CONTATO SITE</strong><br><br>";
  $body .= "<strong>Nome: </strong>$name<br>";
  $body .= "<strong>Email: </strong>$email<br>";
  $body .= "<strong>Mensagem: </strong><br>$message<br>";

  // Email que receberá a mensagem
  $email_to = "contato@airzonedroneworks.com.br";

  // Enviando email
  $status = mail($email_to, mb_encode_mimeheader($subject, "utf-8"), $body, $headers);

  if($status):
    // Enviado com sucesso
    header('location:index.php?status=sucesso');
  else:
    // Se der erro
    header('location:index.php?status=erro');
  endif;
?>
