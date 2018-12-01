
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <section id="home">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="images/notebook-Promessometro.png" width="500" />
                </div>
                <div class="col-md-6">
                    <h2>Sobre o Promessômetro</h2><br>
                    <h4>Plataforma idealizada durante o 1° AMAZON Hackfest, evento voltado para a criar soluções no combater à corrupção. Nosso objetivo é oferecer ao povo uma ferramenta leve em que todos possam acompanhar seus candidatos eleitos e saber o andamento das promessas feitas durante campanha eleitoral. </h4>
                </div>
            </div>
            
        </div>
    </section>
        <section id="about">
            </section>

 <div class="py-5 text-center" >
    <div class="container">
      <div class="row">
        <div class="mx-auto col-md-12">
          <h1 class="mb-3">Nossa Equipe</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-6 p-4"> <img class="rounded-circle" src="equipe/jr.jpg" width="100" alt="Card image cap">
          <h4> <b>José Jr</b> </h4>
          <p>Desenvolvedor Front-End/Back-End</p>
          <p class="mb-0"> <i>"Bacharel em Ciência da Computação, Pós-Graduado em Auditoria e segurança de informatica"</i> </p>
        </div>
        <div class="col-lg-3 col-6 p-4"> <img class="rounded-circle" src="equipe/marcio.jpg" width="100" alt="Card image cap">
          <h4> <b>Marcio Lira</b> </h4>
          <p>Empreendedor Social, Pai, Entusiasta.</p>
          <p class="mb-0"> <i>"Advogado, acredita que a tecnologia é o melhor caminho para melhorar a vida das pessoas"</i> </p>
        </div>
        <div class="col-lg-3 col-6 p-4"> <img class="rounded-circle" src="equipe/katelen.jpeg" width="100">
          <h4> <b>Katleen</b> </h4>
          <p>Desenvolvendora Front-End</p>
          <p class="mb-0"> <i>"Estudante de engenharia elétrica, estagiária na Sídia"</i> </p>
        </div>
        <div class="col-lg-3 col-6 p-4"> <img class=" rounded-circle" src="equipe/marilia.png" width="100">
          <h4> <b>Marilia Soares</b> </h4>
          <p>Desenvolvendora Front-End</p>
          <p class="mb-0"> <i>"Graduanda em Análise e Desenvolvimento de Sistemas, entusiasta da programação, louca por café e linhas de código"</i> </p>
        </div>
           
           <div class="col-lg-3 col-6 p-4"> <img class=" rounded-circle" src="equipe/yure.jpeg" width="100">
          <h4> <b>Yure</b> </h4>
          <p>Estudante</p>
          <p class="mb-0"> <i>"Acadêmico de Engenharia de Controle e Automação"</i> </p>
        </div>
           
           <div class="col-lg-3 col-6 p-4"> <img class=" rounded-circle" src="equipe/victor.jpeg" width="100">
          <h4> <b>Victor</b> </h4>
          <p>Estudante</p>
          <p class="mb-0"> <i>"Acadêmico e Apreciador de Tecnologia"</i> </p>
        </div>
		 
		  <div class="col-lg-3 col-6 p-4"> <img class="i rounded-circle" src="equipe/alan.jpeg" width="100">
          <h4> <b>Alan Delon</b> </h4>
          <p>Administrador por formação e chocolatra por paixão.</p>
          <p class="mb-0"> <i>"Com especializações em gestão de pessoas e gestão de negócios inovadores, possui experiência em monitoria e gestão de projetos sociais com refugiados e imigrantes em parceria com o Alto Comissariado das Nações Unidas para os Refugiados – ACNUR."</i> </p>
        </div>
		 
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
                <script src="js/jquery.js"></script>
				<script src="js/script.js"></script>
				<script src="js/bootstrap.js"></script>
				<script src="js/bootstrap.bundle.js"></script>
