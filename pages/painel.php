<?php
require_once'Conn/conexao.php';


// Recebe o termo de pesquisa se existir
$termo = (isset($_GET['termo'])) ? $_GET['termo'] : '';


 
// Verifica se o termo de pesquisa está vazio, se estiver executa uma consulta completa
if (empty($termo)):

	$conexao = conexao::getInstance();
	$sql = 'SELECT id, tipopromessa, nomepolitico, cargopromessa, partido_politico, nomepromessa, detalhepromessa, anopromessa, estadopromessa, cidadepromessa, status, foto FROM tab_promessas';
	$stm = $conexao->prepare($sql);
	$stm->execute();
	$clientes = $stm->fetchAll(PDO::FETCH_OBJ);

else:

	// Executa uma consulta baseada no termo de pesquisa passado como parâmetro
	$conexao = conexao::getInstance();
	$sql = 'SELECT id, tipopromessa, nomepolitico, cargopromessa, partido_politico, nomepromessa, detalhepromessa, anopromessa, estadopromessa, cidadepromessa, status, foto FROM tab_promessas WHERE nomepolitico LIKE :nomepolitico OR nomepromessa LIKE :nomepromessa';
	$stm = $conexao->prepare($sql);
	$stm->bindValue(':nomepolitico', $termo.'%');
	$stm->bindValue(':nomepromessa', $termo.'%');
	$stm->execute();
	$clientes = $stm->fetchAll(PDO::FETCH_OBJ);

endif;


?>

<body>
	<div class='container'>
		<fieldset>
			<!-- Formulário de Pesquisa -->
			
			<form action="" method="get" id='form-contato'  class="col-lg-8" >
				<label class="col-md-12 control-label" for="termo">
				<div class="row">
				<div class='col-lg-8'>
			    	<input type="text" class="form-control" id="termo" name="termo" placeholder="Infome o Politico ou Nome da promessa"><br>
                    <button type="submit" class="btn btn-warning" >Pesquisar</button>
			        <a href='painel.php' class="btn btn-warning" >Ver Todos</a>
                      <!-- Link para página de cadastro -->
                     <a href='cadastro.php' class="btn btn-warning m-6 " class="form-horizontal col-md-12" >Cadastrar nova promessa</a>
				</div>
				</div>
				</label>
                 
			</form>
			
			<?php if(!empty($clientes)):?>

				<!-- Tabela de promessas -->
			<h3>Listas de Promessas</h3>
				<div style="width: 100%; height: 445px; overflow-x: hidden; overflow-y; scrool;" class="w-100">
          		<table class="table table-striped table-dark">
					<tr class='active'>
						<th>Foto</th>
                        <th>Politico</th>
						<th>Partido</th>
						<th>Cargo</th>
						<th>Nome da Promessa</th>
                        <th>Detalhes da Promessa</th>
                        <th>Ano da Promessa</th>
                        <th>Estado</th>
                        <th>Cidade</th>
						<th>Status</th>
						<th>Ação</th>
					</tr>
					<?php foreach($clientes as $cliente):?>
						<tr>
							<td><img src='fotos/<?=$cliente->foto?>' height='70' width='70'></td>
							<td><?=$cliente->nomepolitico?></td>
							<td><?=$cliente->partido_politico?></td>
							<td><?=$cliente->cargopromessa?></td>
                            <td><?=$cliente->nomepromessa?></td>
                            <td><?=$cliente->detalhepromessa?></td>
                            <td><?=$cliente->anopromessa?></td>
                            <td><?=$cliente->estadopromessa?></td>
                            <td><?=$cliente->cidadepromessa?></td>
							<td><?=$cliente->status?></td>
							<td><a href='editar.php?id=<?=$cliente->id?>' class="btn btn-warning">Editar</a></td>
							
						</tr>	
					<?php endforeach;?>
				</table>

			<?php else: ?>

				<!-- Mensagem caso não exista clientes ou não encontrado  -->
				<h3 class="text-center text-primary">Não existem promessas cadastrados!</h3>
			<?php endif; ?>
		</fieldset>
			
	</div>
		
		
<?php	
		
		require_once'Conn/conexao.php';
		
		
		// Recebe o termo de pesquisa se existir
$termos = (isset($_GET['termos'])) ? $_GET['termos'] : '';


 
// Verifica se o termo de pesquisa está vazio, se estiver executa uma consulta completa
if (empty($termos)):

	$conexao = conexao::getInstance();
	$sql = 'SELECT id, nomedenuncia, politicodenuncia, estadodenuncia, emaildenuncia, descricaodenuncia FROM tab_denuncias';
	$stm = $conexao->prepare($sql);
	$stm->execute();
	$denuncia = $stm->fetchAll(PDO::FETCH_OBJ);
		
		else:

	// Executa uma consulta baseada no termo de pesquisa passado como parâmetro
	$conexao = conexao::getInstance();
	$sql = 'SELECT id, nomedenuncia, politicodenuncia, estadodenuncia, emaildenuncia, descricaodenuncia FROM tab_denuncias WHERE emaildenuncia LIKE :emaildenuncia OR politicodenuncia LIKE :politicodenuncia';
	$stm = $conexao->prepare($sql);
	$stm->bindValue(':emaildenuncia', $termos.'%');
	$stm->bindValue(':politicodenuncia', $termos.'%');
	$stm->execute();
	$denuncia = $stm->fetchAll(PDO::FETCH_OBJ);


endif;
		
		?>
		
		<div class='container'>
				<fieldset>
			<?php if(!empty($denuncia)):?>

				<!-- Tabela de denucias -->
          <h3>Denucias</h3>
        
				<div style="width: 100%; height: 345px; overflow-x: hidden; overflow-y; scrool;" class="w-100">
          		<table class="table table-striped table">
					<tr class='active'>
						<th>Nome</th>
                        <th>Politico</th>
						<th>Email</th>
                        <th>Estado</th>
                        <th>Denuncia</th>
						<th>Ação</th>
					</tr>
					<?php foreach($denuncia as $denuncia):?>
						<tr>
							<td><?=$denuncia->nomedenuncia?></td>
                            <td><?=$denuncia->politicodenuncia?></td>
                            <td><?=$denuncia->emaildenuncia?></td>
                            <td><?=$denuncia->estadodenuncia?></td>
                            <td><?=$denuncia->descricaodenuncia?></td>
							<td><a href='deletedenuncia.php?id=<?=$denuncia->id?>' class="btn btn-danger link_exclusao">Excluir</a></td>
							
						</tr>	
					<?php endforeach;?>
				</table>

			<?php else: ?>

				<!-- Mensagem caso não exista clientes ou não encontrado  -->
				<h3 class="text-center text-primary">Não existem denucias cadastrados!</h3>
			<?php endif; ?>
		</fieldset>
			
	</div>
             
             
             
             <?php	
		
		require_once'Conn/conexao.php';
		
		
		// Recebe o termo de pesquisa se existir
$termocontato = (isset($_GET['termocontato'])) ? $_GET['termocontato'] : '';


 
// Verifica se o termo de pesquisa está vazio, se estiver executa uma consulta completa
if (empty($termocontato)):

	$conexao = conexao::getInstance();
	$sql = 'SELECT idcontato, nomecontato, emailcontato, msgcontato FROM tab_contatos';
	$stm = $conexao->prepare($sql);
	$stm->execute();
	$contato = $stm->fetchAll(PDO::FETCH_OBJ);
		
		else:

	// Executa uma consulta baseada no termo de pesquisa passado como parâmetro
	$conexao = conexao::getInstance();
	$sql = 'SELECT idcontato, nomecontato, emailcontato, msgcontato FROM tab_contatos WHERE emailcontato LIKE :emailcontato OR nomecontato LIKE :nomecontato';
	$stm = $conexao->prepare($sql);
	$stm->bindValue(':emailcontato', $termocontato.'%');
	$stm->bindValue(':nomecontato', $termocontato.'%');
	$stm->execute();
	$contato = $stm->fetchAll(PDO::FETCH_OBJ);


endif;
		
		?>
		
		<div class='container'>
				<fieldset>
			<?php if(!empty($contato)):?>

				<!-- Tabela de denucias -->
          <h3>Contatos</h3>
        
				<div style="width: 100%; height: 345px; overflow-x: hidden; overflow-y; scrool;" class="w-100">
          		<table class="table table-striped table">
					<tr class='active'>
						<th>Nome</th>
                        <th>Email</th>
						<th>Mensagem</th>
						<th>Ação</th>
					</tr>
					<?php foreach($contato as $contato):?>
						<tr>
							<td><?=$contato->nomecontato?></td>
                            <td><?=$contato->emailcontato?></td>
                            <td><?=$contato->msgcontato?></td>
							<td><a href='deletecontato.php?idcontato=<?=$contato->idcontato?>' class="btn btn-danger link_exclusao ">Excluir</a></td>
							
						</tr>	
					<?php endforeach;?>
				</table>

			<?php else: ?>

				<!-- Mensagem caso não exista clientes ou não encontrado  -->
				<h3 class="text-center text-primary">Não existem contatos enviados!</h3>
			<?php endif; ?>
		</fieldset>
			
	</div>
		
	
		
	<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>