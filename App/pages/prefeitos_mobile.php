<?php
require_once'../Conn/conexao.php';


// Recebe o termo de pesquisa se existir
$termo = (isset($_GET['termo'])) ? $_GET['termo'] : '';
$cargopromessa     =  'Presidente' ;


 
// Verifica se o termo de pesquisa está vazio, se estiver executa uma consulta completa
if (empty($termo)):

	$conexao = conexao::getInstance();
	$sql = 'SELECT * FROM tab_promessas WHERE cargopromessa = "Prefeito" ';
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

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="theme.css">
  <link rel="icon" href="../images/favicon.png">
<link rel="stylesheet" href="../css/bootstrap.css">


  <title>Promessometro</title>
</head>

<body href="images/Background Gradiente-01.svg" style="	background-image: url(&quot;../images/Ilustra_01.png&quot;), url(&quot;../images/Ilustra_02_manchas.png&quot;);	background-position: right top, top left;	background-size: 40%, 65%;	background-repeat: no-repeat, no-repeat;" >
  <nav class="navbar navbar-expand-md mb-5 sticky-top navbar-light header" style="">
    <div class="container"> <a class="navbar-brand text-primary" href="../index.php">
        <i class="fa d-inline fa-lg fa-stop-circle"></i>
        <img class="img-fluid d-block" src="../images/header.png">
      </a> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar4">
        <span class="navbar-toggler-icon"></span>
      </button>
		
      <div class="collapse navbar-collapse" id="navbar4">
        <ul class="navbar-nav ml-auto ">
          <li class="nav-item"> <a class="nav-link active" href="../index.php">Inicio</a> </li>
          <li class="nav-item"> <a class="nav-link active" href="../pages/sobre.php">Sobre</a> </li>
          <li><a class="nav-link active" data-toggle="modal" data-target="#exampleModal" href="#exampleModal" #exampleModal>Colabore Conosco</a></li>
        </ul>
      </div>
    </div>
  </nav>
     
     <div class="my-1">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <form class="form-inline">
            <div class="input-group">
              <input type="text" class="form-control form-control-lg" id="inlineFormInputGroup" id="termo" name="termo" placeholder="Nome do politico ou Ano" >
              <div class="input-group-append"><button class="btn btn-warning" type="submit"><img src="../images/lupa.gif" class="img-fluid" width="22"><i class="fa fa-search"></i></button></div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
     
     
     <?php if(!empty($clientes)):?>
<table class="table table-striped table-dark">
    <thead>
      <tr>
        <th scope="col">Imagem</th>
        <th scope="col">Nome</th>
        <th scope="col">Promessa</th>
        <th scope="col">Status</th>
      </tr>
        
    </thead>
    <tbody>
          <?php foreach($clientes as $cliente):?>
      <tr>
        <td><img src='../fotos/<?=$cliente->foto?>' height='40' width='40'></td>
        <td><?=$cliente->nomepolitico?></td>
        <td><?=$cliente->nomepromessa?></td>
        <td><?=$cliente->status?></td>
      </tr>
      
         <?php endforeach;?>
         
    </tbody>
     
  </table>
     <?php else: ?>

				<!-- Mensagem caso não exista clientes ou não encontrado  -->
				<h3 class="text-center text-primary">Não existem promessas cadastrados!</h3>
			<?php endif; ?>
     
