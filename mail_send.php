<?php
$Nome		= $_POST["nomecontato"];	// Pega o valor do campo Nome
$Email		= $_POST["emailcontato"];	// Pega o valor do campo Email
$Mensagem	= $_POST["msgcontato"];	// Pega os valores do campo Mensagem

// Variável que junta os valores acima e monta o corpo do email

$Vai 		= "nomecontato: $Nome\n\nemailcontato: $Email\n\nmsgcontato: $Mensagem\n";

require_once("phpmailer/class.phpmailer.php");

define('GUSER', 'chegadpromessa@gmail.com');	// <-- Insira aqui o seu GMail
define('GPWD', 'Colorau071638');		// <-- Insira aqui a senha do seu GMail

function smtpmailer($para, $de, $de_nome, $assunto, $corpo) { 
	global $error;
	$mail = new PHPMailer();
	$mail->IsSMTP();		// Ativar SMTP
	$mail->SMTPDebug = 0;		// Debugar: 1 = erros e mensagens, 2 = mensagens apenas
	$mail->SMTPAuth = true;		// Autenticação ativada
	$mail->SMTPSecure = 'tls';	// SSL REQUERIDO pelo GMail
	$mail->Host = 'smtp.gmail.com';	// SMTP utilizado
	$mail->Port = 587;  		// A porta 587 deverá estar aberta em seu servidor
	$mail->Username = GUSER;
	$mail->Password = GPWD;
	$mail->SetFrom($de, $de_nome);
	$mail->Subject = $assunto;
	$mail->Body = $corpo;
	$mail->AddAddress($para);
	if(!$mail->Send()) {
		$error = 'Mail error: '.$mail->ErrorInfo; 
		return false;
	} else {
		$error = 'Mensagem enviada!';
		return true;
	}
}

// Insira abaixo o email que irá receber a mensagem, o email que irá enviar (o mesmo da variável GUSER), 
//o nome do email que envia a mensagem, o Assunto da mensagem e por último a variável com o corpo do email.

 if (smtpmailer('chegadpromessa@gmail.com', 'jchegadpromessa@gmail.com', 'Nome do Enviador', 'Contato atraves do site', $Vai)) {

	Header("location:http:index.php"); // Redireciona para uma página inicial.

}
if (!empty($error)) echo $error;


		require_once'Conn/conexao.php';
		require_once'Conn/conection.php';

		// Atribui uma conexão PDO
		$conexao = conexao::getInstance();

		// Recebe os dados enviados pela submissão
		$acao  = (isset($_POST['acao'])) ? $_POST['acao'] : '';
		$id    = (isset($_POST['idcontato'])) ? $_POST['idcontato'] : '';
		$nomecontato  = (isset($_POST['nomecontato'])) ? $_POST['nomecontato'] : '';
        $emailcontato = (isset($_POST['emailcontato'])) ? $_POST['emailcontato'] : '';
        $msgcontato  = (isset($_POST['msgcontato'])) ? $_POST['msgcontato'] : '';
        

			$sql = 'INSERT INTO tab_contatos (nomecontato, emailcontato, msgcontato)
										VALUES(:nomecontato, :emailcontato, :msgcontato)';

			$stm = $conexao->prepare($sql);
			$stm->bindValue(':nomecontato', $nomecontato);
            $stm->bindValue(':emailcontato', $emailcontato);
            $stm->bindValue(':msgcontato', $msgcontato);
			$retorno = $stm->execute();

			if ($retorno):
				echo "<div class='alert alert-success' role='alert'>contato recebido com sucesso, aguarde você está sendo redirecionado ...</div> ";
		    else:
		    	echo "<div class='alert alert-danger' role='alert'>Erro ao enviar contato!</div> ";
			endif;

			echo "<meta http-equiv=refresh content='3;URL=index.php'>";
		
?>