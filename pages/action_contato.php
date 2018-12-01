<body>
	<div class='container box-mensagem-crud'>
		<?php 
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
