<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

   $nome = $_POST['nome'];
   $email = $_POST['email'];
   $mensagem = $_POST['mensagem'];
   $url="http://rairooftop.com.br/";
   $emailenvio="contato@espacorairooftop.com.br";


   //$mail->Mailer = "mail";
   // $mail->SMTPSecure = 'tls';
   // $mail->Host = "smtp.rai.com.br"; // Endereço do servidor SMTP
   // $mail->SMTPAuth = true; // Usa autenticação SMTP? (opcional) - bom ter pra não ir pra spam
   // $mail->Port = 587;
   // $mail->Username = 'sistema@rai.com.br'; // Usuário do servidor SMTP
   // $mail->Password = 'sistema@rai'; // Senha do servidor SMTP
   // $mail->SMTPDebug = 1;
$mail = new PHPMailer();

 // Define os dados do servidor e tipo de conexão
 // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
 $mail->IsSMTP();
 $mail->SMTPOptions = array( 'ssl' => array( 'verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true ) );
 $mail->SMTPSecure = 'ssl';
 $mail->Host = "smtp.gmail.com"; // Endereço do servidor SMTP
 $mail->SMTPAuth = true; // Usa autenticação SMTP? (opcional) - bom ter pra não ir pra spam
 $mail->Port = 465;
 $mail->Username = 'orcontatorai@gmail.com'; // Usuário do servidor SMTP
 $mail->Password = 'R00ftop@r4i'; // Senha do servidor SMTP 
 //$mail->SMTPDebug = 1;

$mail->From = $email; // Seu e-mail
$mail->FromName = $nome; // Seu nome

$mail->AddAddress('biel.ap2012@gmail.com'); //Email pessoal teste


//$mail->AddAddress('contato@promokiss.com.br', 'Contato PromoKiss');
//$mail->AddAddress('paulosbzl@gmail.com', 'Contato Rooftop');
//$mail->AddCC('paulosbzl@gmail.com', 'Paulo'); // Copia
//$mail->AddBCC( 'promokiss@tovpromo.com.br', 'TOV Promo' ); // Cópia Oculta
//$mail->addReplyTo( 'contato@promokiss.com.br', 'Contato PromoKiss' );

// Define os dados técnicos da Mensagem
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
$mail->CharSet = 'utf-8'; // Charset da mensagem

// Define a mensagem (Texto e Assunto)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->Body .= '<br><br>Formulario do seu portfolio!!';
$mail->Body .= '<br><br>Nome: ' . $nome;
$mail->Body .= '<br><br>E-mail: ' . $email;
$mail->Body .= '<br><br>Descrição: ' . $mensagem;



//$mail->AltBody = "Este é o corpo da mensagem de teste, em Texto Plano! \r\n :)";

// Define os anexos (opcional)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
//$mail->AddAttachment("c:/temp/documento.pdf", "novo_nome.pdf");  // Insere um anexo

// Envia o e-mail
$enviado = $mail->Send();

// Limpa os destinatários e os anexos
$mail->ClearAllRecipients();
$mail->ClearAttachments();

if ($enviado) {


echo ("<script>confirm('Email enviado com sucesso!!');");
        echo ("location.href = 'http://localhost:8080/CV1/';</script>");
       exit;

    

} else { //echo "<b>Informações do erro:</b> " . $mail->ErrorInfo;
   echo '<div style="background-color: #f8d7da; color: #721c24; padding: .75rem 1.25rem;">Oops..tivemos um problema e a mensagem não foi enviada. Tente novamente, ou envie um e-mail para orcontatorai@gmail.com</div>';
            //    echo "Detalhes do erro: " . $mail->ErrorInfo;

}

?>