<body>
	<div class='container box-mensagem-crud'>
		<?php 
		require_once'Conn/conexao.php';

		// Atribui uma conexão PDO
		$conexao = conexao::getInstance();
		
		// Recebe o id do cliente do cliente via GET
          $id = (isset($_GET['idcontato'])) ? $_GET['idcontato'] : '';
         
			$sql = "DELETE FROM tab_contatos WHERE idcontato ='$id'";
		
           $stm = $conexao->prepare($sql);
			$stm->bindvalue(':idcontato', $id); 
			$stm->execute();

			if ($stm):
				echo "<div class='alert alert-success' role='alert'>Contato excluido com sucesso, aguarde você está sendo redirecionado ...</div> ";
		    else:
		    	echo "<div class='alert alert-danger' role='alert'>Erro ao enviar denuncia!</div> ";
			endif;

			echo "<meta http-equiv=refresh content='3;URL=painel.php'>";
			
?>    