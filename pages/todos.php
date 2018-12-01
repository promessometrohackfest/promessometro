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
	$sql = 'SELECT id, tipopromessa, nomepolitico, cargopromessa, partido_politico, nomepromessa, detalhepromessa, anopromessa, estadopromessa, cidadepromessa, status, foto FROM tab_promessas WHERE nomepolitico LIKE :nomepolitico OR anopromessa LIKE :anopromessa OR estadopromessa LIKE :estadopromessa OR cargopromessa LIKE :cargopromessa';
	$stm = $conexao->prepare($sql);
	$stm->bindValue(':nomepolitico', $termo.'%');
	$stm->bindValue(':anopromessa', $termo.'%');
    $stm->bindValue(':estadopromessa', $termo.'%');
    $stm->bindValue(':cargopromessa', $termo.'%');
	$stm->execute();
	$clientes = $stm->fetchAll(PDO::FETCH_OBJ);

endif;



?>

<form action="" method="get">
<div class="mb-2" style="" >
    <div class="container">
      <div class="row">
      </div>
      <div class="row">
        <div class="form-group col-lg-6" style="glyphicon glyphicon-search">
          <label for="anopromessa"><h4>Nome do Candidato</h4></label>
          <input type="text" class="form-control border-warning"  id="termo" name="termo">
          <span class="msg-erro msg-nome"></span>
        </div>
        <div class="col-md-2">
          <div class="form-group">
            <label for="estadopromessa"><h4>Ano da Eleição</h4></label>
            <select class="form-control border-warning" id="termo" name="termo">
              <option value="2018">2018</option>
              <option value="2014">2014</option>
              <option value="2010">2010</option>
            </select>
            <span class="msg-erro msg-nome"></span>
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-group">
            <label for="estadopromessa"><h4>Estado</h4></label>
            <select class="form-control border-warning" id="termo" name="termo">
                 <option value="BR">Brasil</option>
              <option value="AC">Acre</option>
              <option value="AL">Alagoas</option>
              <option value="AP">Amapá</option>
              <option value="AM">Amazonas</option>
              <option value="BA">Bahia</option>
              <option value="CE">Ceará</option>
              <option value="DF">Distrito Federal</option>
              <option value="ES">Espirito Santo</option>
              <option value="GO">Goiás</option>
              <option value="MA">Maranhão</option>
              <option value="MS">Mato Grosso do Sul</option>
              <option value="MT">Mato Grosso</option>
              <option value="MG">Minas Gerais</option>
              <option value="PA">Pará</option>
              <option value="PB">Paraíba</option>
              <option value="PR">Paraná</option>
              <option value="PE">Pernambuco</option>
              <option value="PI">Piauí</option>
              <option value="RJ">Rio de Janeiro</option>
              <option value="RN">Rio Grande do Norte</option>
              <option value="RS">Rio Grande do Sul</option>
              <option value="RO">Rondônia</option>
              <option value="RR">Roraima</option>
              <option value="SC">Santa Catarina</option>
              <option value="SP">São Paulo</option>
              <option value="SE">Sergipe</option>
              <option value="TO">Tocantins</option>
            </select>
            <span class="msg-erro msg-nome"></span>
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-group">
            <label for="estadopromessa"><h4>Cargos</h4></label>
            <select class="form-control border-warning" id="termo" name="termo">
              <option value="Presidente">Presidente</option>
              <option value="Governador">Governador</option>
              <option value="Prefeito">Prefeito</option>
            </select>
            <span class="msg-erro msg-nome"></span>
          </div>
        </div>
		   <div class="col-md-12" style="">
			   <button type="submit" class="btn btn-warning btn-lg border btn-block " contenteditable="true"><img src="images/lupa.gif" class="img-fluid" width="25"><i class="fa fa-user fa-fw"></i><i class="fa fa-search"></i>
          </button></div>
      </div>
    </div>
  </div>
</form>


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
							
						</tr>	
					<?php endforeach;?>
				</table>

			<?php else: ?>

				<!-- Mensagem caso não exista clientes ou não encontrado  -->
				<h3 class="text-center text-primary">Não existem promessas cadastrados!</h3>
			<?php endif; ?>
		</fieldset>
			
	</div>

          