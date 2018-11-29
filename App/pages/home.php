

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
  <nav class="navbar navbar-expand-md mb-4 sticky-top navbar-light header" style="">
    <div class="container"> <a class="navbar-brand text-primary" href="../App/index.php">
        <i class="fa d-inline fa-lg fa-stop-circle"></i>
        <img  src="../images/header.png">
      </a> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar4">
        <span class="navbar-toggler-icon"></span>
      </button>
		
      <div class="collapse navbar-collapse" id="navbar4">
        <ul class="navbar-nav ml-auto ">
          <li class="nav-item"> <a class="nav-link active" href="../App/index.php">Inicio</a> </li>
          <li class="nav-item"> <a class="nav-link active" href="../App/pages/sobre.php">Sobre</a> </li>
          <li><a class="nav-link active" data-toggle="modal" data-target="#exampleModal" href="#exampleModal" #exampleModal>Colabore Conosco</a></li>
        </ul>
      </div>
    </div>
  </nav>

     <form action="../App/pages/todos_mobile.php">
<div class="py-1">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <form class="form-control">
            <div class="input-group">
              <input type="text" class="form-control form-control-lg" id="inlineFormInputGroup" id="termo" name="termo" placeholder="Nome do politico ou Ano" >
              <div class="input-group-append"><button class="btn btn-warning" type="submit"><img src="../images/lupa.gif" class="img-fluid" width="22"><i class="fa fa-search"></i></button></div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
          </form>
          
  <div class="py-1">
    <div class="container">
      <div class="row">
        <div class="col-md-1" style=""><a class="btn btn-outline-warning btn-block my-1 btn-lg" href="../App/pages/presidentes_mobile.php">Presidentes</a></div>
        <div class="col-md-6" style=""><a class="btn btn-outline-warning btn-block my-1 btn-lg" href="../App/pages/governadores_mobile.php">Governadores</a></div>
        <div class="col-md-6" style=""><a class="btn btn-outline-warning btn-block my-1 btn-lg" href="../App/pages/prefeitos_mobile.php">Prefeitos</a></div>
        <div class="col-md-6" style=""><a class="btn btn-outline-warning btn-block my-1 btn-lg" href="../App/pages/todos_mobile.php">Todos</a></div>
      </div>
    </div>
  </div>
  <div class="py-1">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p contenteditable="true" class="lead">Sabe de alguma proposta que não foi cumprida?</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12"><a class="btn btn-lg btn-block btn-warning" data-toggle="modal" data-target="#exampleModal" href="#exampleModal" #exampleModal>Colabore aqui</a></div>
      </div>
    </div>
  </div>
     
     <!-- Modal -->
<form action="action_denuncia.php" method="post">
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Denúncia</h5>
                  
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                    <div class="col-md-12">
                            Preencha as informações o contribua com a plataforma. Todas as informações são sigilosas e as informações de contato são opcionais. <br />
                    </div>
						
						
                    <div class="form col-lg-6 ">
                        <span>Nome(Opcional)</span><br /><input class="form-control border border-warning" type="text" id="nomedenuncia" name="nomedenuncia" />
                    </div>
                    <div class="col-md-6">
                        <span>Email(Opcional)</span><br /><input class="form-control border border-warning" type="text" id="emaildenuncia" name="emaildenuncia" />
                    </div>
                    <div class="col-md-6">
                        <span>Nome do Candidato</span><br /><input class="form-control border border-warning" type="text" id="politicodenuncia" name="politicodenuncia" />
                    </div>
                    <div class="col-md-6">
                        <span for="estadodenuncia">Estado</span><br />
                        <select class="form-control border border-warning" name="estadodenuncia">
                            <option selected>Estado</option>
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
										      <option value="RS">>Rio Grande do Sul</option>
										      <option value="RO">Rondônia</option>
										      <option value="RR">Roraima</option>
										      <option value="SC">Santa Catarina</option>
										      <option value="SP">São Paulo</option>
										      <option value="SE">Sergipe</option>
										      <option value="TO">Tocantins</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <span>Denúncia</span><br /><textarea class="form-control border border-warning" type="text" id="descricaodenuncia" name="descricaodenuncia" size="30"></textarea>
                    </div>
                
            </div>   
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger btncancelar" rows="3" data-dismiss="modal">Cancelar e sair</button>
        <button type="submit" class="btn btn-warning btnenviar">Enviar denúncia</button>
    </div>
              </div>
            </div>
          </div>
</form>

 <!-- JQuery -->
                <script src="../App/js/jquery.js"></script>
				<script src="../App/js/script.js"></script>
				<script src="../App/js/bootstrap.js"></script>
				<script src="../App/js/bootstrap.bundle.js"></script>