			<div class="container first-container usuario">
				<div class="card py-5 px-5 mt-4 mb-0 shadow card-theme">
					<div class="row align-items-center">
						<div class="col-xl col-md-12 mx-auto px-0">
							<h4 class="my-3 text-center theme"><span class="text-capitalize" style="font-size: 2rem; font-weight:lighter;"><?php echo $this->session->userdata('usuario'); ?></span></h4>
						</div>
						<div class="vertical-line"></div>
						<div class="col-xl col-md-12 mx-auto px-0">
							<div class="container h-100 usuario">
								<div class="mb-2 rounded-lg px-3 py-5">
									<div class="">
										<div class="d-flex justify-content-center">
											<div class="brand_logo_container">
												<h1 class="title_log theme">Preencha para atualizar</h1><!--Nossa Logo-->
											</div>
										</div>
										<div class="d-flex justify-content-center form_container theme">
											<form method="post" action="">
												<span>Nome Completo:</span>
												<div class="input-group mb-2">
													<input type="text" name="nome" class="form-control dados_user border-0 text-capitalize" placeholder="">
												</div>
												<span>Usuário:</span>
												<div class="input-group mb-2">
													<input type="text" name="usuario" class="form-control dados_user border-0 text-capitalize" placeholder="">
												</div>
												<?php 
												if (isset($_GET['error'])){
													if ($_GET['error']==1) {
														?>
														<div class='alert alert-danger' role='alert'>O nome de usuário<wbr>já existe!</div>
															<?php
														}
													}
													?>
												<span>Email:</span>
												<div class="input-group mb-2">
													<input type="text" name="email" class="form-control dados_user border-0" placeholder="">
												</div>
												<span>Preço por kWh:</span>
												<div class="input-group mb-2">
													<input type="text" name="tarifa_kwh" id="tarifa" class="form-control input_pass maskMoney dados_user border-0" placeholder="Tarifa por kWh"  min="0.10" max="3.00" step="0.01">
												</div>
												<a href="login" class="ml-1 float-right" data-toggle="modal" data-target="#saibamais"><i class="far fa-question-circle mr-2 theme" style="position: relative; top: -38px; bottom: 0px; z-index: 333"></i></a>		
										</div>
												<!-- ###modal### -->
												 <div class="modal fade" id="saibamais" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
									              <div class="modal-dialog modal-dialog-centered" role="document">
									                <div class="modal-content">
									                  <div class="modal-header">
									                    <h6 class="modal-title" id="TituloModalCentralizado">Entenda melhor</h6>
									                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
									                      <span aria-hidden="true">&times;</span>
									                    </button>
									                  </div>
									                  <div class="modal-body">
									                  	<p class="text-justify">&emsp;O <span class="font-weight-bold">preço</span> ou <span class="font-weight-bold">tarifa por kWh</span> é o valor cobrado em reais a cada kWh (Quilowatt-hora) de energia consumida. Este vaor está diretamente relacionado ao preço da sua conta ao final do mês. Essa taxa pode variar de cidade para cidade, ou até mesmo de bairro para bairro. Então, se você puder informar a tarifa de energia você terá uma maior precisão do controle dos seus gastos mensais. Esse valor encontra-se impresso na coluna 'preço (R$)', abaixo do título 'Descrição da nota fiscal' na sua conta. Caso não esteja com sua conta ou não tenha encontrado não se preocupe, nós utilizaremos uma média.</p>
									                  	<div class="row">
									                  		<img src="<?= base_url()?>assets/fotos/user_man.png" class="my-2 mx-auto" width='200'>
									                  	</div>
									                  </div>
									                  <div class="modal-footer">
									                    <button type="button" class="btn btn-warning text-dark" data-dismiss="modal">Ok</button>
									                  </div>
									                </div>
										            </div>
										        </div>
												<div class="d-flex justify-content-center mt-3 login_container my-3">
													<button type="" name="editar" id="atualizar" class="btn btn-warning position-absolute my-4 mb-5">Editar dados</button>
												</form>
											</div>
									</div>
								</div>
							</div>
							<!--conteudo-->
						</div>
					</div>
				</div>

				<!--Segundo container-->

				<div class="card py-5 px-5 my-4 mt-0 shadow card-theme">
					<div class="row align-items-center">
						<div class="col-xl col-md-12 mx-auto px-0">
							<h4 class="my-3 text-center theme"><span class="text-capitalize" style="font-size: 2rem; font-weight:lighter;">txt</span></h4>
						</div>
						<div class="vertical-line"></div>
						<div class="col-xl col-md-12 mx-auto px-0">
							<div class="container h-100 usuario">
								<div class="mb-2 rounded-lg px-3 py-5">
									<div class="">
									</div>
								</div>
							</div>
							<!--conteudo-->
						</div>
					</div>
				</div>
			</div>
		<script>
			$("#tarifa").maskMoney({
			  thousands: '.', 
			  decimal: '.' , 
			  precision: 2, 
			  affixesStay : false, 
			  bringCaretAtEndOnFocus: true 
			}); 
		</script>
		<script>
			var atual ="Atualize";
		</script>