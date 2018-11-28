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