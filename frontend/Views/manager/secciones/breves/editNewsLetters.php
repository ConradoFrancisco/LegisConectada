<pre>
	<?php
	// var_dump($news['subtitulo']);
	?>
</pre>


<style>
	button.btn-link {

		font-size: 1.2em;
		color: #000;
	}
</style>
<script>
	var datosPub = <?php echo json_encode($news['publicaciones']); ?>;
	var datosSus = <?php echo json_encode($news['sucriptores']); ?>;
	var datosGrupos = <?php echo json_encode($news['grupos']); ?>;
	console.log('datosGrupos');
	console.log(datosGrupos);
</script>
<div class="row">
	<input readonly type="hidden" name="attachment" id="attachment" value="<?= $news['attachment'] ?>">
	<input readonly type="hidden" name="idNews" id="idNews" value="<?= $news['id'] ?>">
	<div class="col-md-12 ">
		<div class="card ">
			<div class="card-body">
				<div class="row">
					<div class="col-4">
						<h4 class="card-title">Título del newsletter</h4>

						<!--					<label for="fname" class="col-sm-3 text-right control-label col-form-label">Nombre</label>-->
						<?php
						$data = array(
							'class' => '',
						);
						echo form_label('', 'asunto', $data);
						?>
						<?php

						$data = array(
							'maxlength' => '35',
							'name'  => 'asunto',
							'id'    => 'asunto',
							'class' => 'form-control',
							'value' => set_value('asunto') . $news['titulo']
							//								'placeholder' =>	'Nombre categoría',
							//								'required'    => 	'required'
						);

						echo form_input($data);
						?>
						<span id="asunto_error" class="invalid-feedback" style="display:block;"></span>
						<span class="aclaracion">* Campo requerido </span><span>(Max. 35 caracteres)</span>
					</div>
					<div class="col-4">
						<h4 class="card-title">Subtítulo del newsletter</h4>

						<!--					<label for="fname" class="col-sm-3 text-right control-label col-form-label">Nombre</label>-->
						<?php
						$data = array(
							'class' => '',
						);
						echo form_label('', 'subtitulo', $data);
						?>
						<?php

						$data = array(
							'name'  => 'subtitulo',
							'id'    => 'subtitulo',
							'class' => 'form-control',
							'value' => $news['subtitulo']
							//								'placeholder' =>	'Nombre categoría',
							//								'required'    => 	'required'
						);

						echo form_input($data);
						?>
						<span id="subtitulo_error" class="invalid-feedback" style="display:block;"></span>
						<span class="aclaracion"></span>
					</div>
				</div>
				<div class="row">
					<div class="col-md-1">
						<button type="button" class="my-2 btn btn-primary">
							Publicaciones <span class="publicaciones_seleccionadas badge badge-light"></span>
							<span class="sr-only">Publicaciones </span>
						</button>
						<div class=" text-danger" id="publicaciones_error"></div>
					</div>
					<div class="col-md-1">
						<button type="button" class="my-2 btn btn-primary">
							Susriptores <span class="suscriptores_seleccionados badge badge-light"></span>
							<span class="sr-only">Suscriptores</span>
						</button>
					</div>
					<div class="col-md-1">
						<button type="button" class="my-2 btn btn-primary">
							Grupos <span class="grupos_seleccionados badge badge-light"></span>
							<span class="sr-only">Grupos</span>
						</button>
					</div>
				</div>
				<div class="row">

					<div class="mt-3 col-12 col-md-6" id="send_gacetilla">
						<div class="card card-hover">
							<div class="box bg-success text-center">
								<h1 class="font-light text-white"><i class=" far fa-newspaper"></i></h1>
								<h6 class="text-white">Actualizar Newsletters</h6>
							</div>
						</div>
					</div>

					<div id="suscriptores_error"></div>
					<!-- <div class="suscriptores_seleccionados">-</div>	 -->
					<!-- <div class="publicaciones_seleccionadas">-</div>	 -->
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-12">
	<div id="accordion">
		<div class="card">
			<div class="card-header" id="headingOne">
				<h5 class="mb-0">
					<button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						Publicaciones
					</button>
				</h5>
			</div>

			<div id="collapseOne" class="1 collapse" aria-labelledby="headingOne" data-parent="#accordion">
				<div class="card-body">
					<div class="card">
						<div class="card-body">
							<h4 class="card-title">Seleccione las publicaciones a incluir el newsletter</h4>
							<span id="publicaciones_error" class="invalid-feedback" style="display:block;"></span>
							<table id="dataTable_publicaciones" class="display" style="width:100%">
								<thead>
									<tr>
										<th><input type="checkbox" id="selectAllPost" class="select-checkbox" data-tabla="dataTable_publicaciones"></th>
										<th>ID</th>
										<th style="width:400px;">Titulo</th>
										<th>Organismo</th>
										<th>Pais</th>
										<th>Provincia</th>
										<th></th>
									</tr>
								</thead>
								<tfoot>
								</tfoot>
							</table>
						</div>

					</div>
				</div>
			</div>
		</div>
		<div class="card">
			<div class="card-header" id="headingTwo">
				<h5 class="mb-0">
					<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						Suscriptores
					</button>
				</h5>
			</div>
			<div id="collapseTwo" class="2 collapse" aria-labelledby="headingTwo" data-parent="#accordion">
				<div class="card-body">
					<div class="card">
						<div class="card-body">
							<h4 class="card-title">Seleccione los suscriptores a incluir el newsletter</h4>
							<span id="suscriptores_error" class="invalid-feedback" style="display:block;"></span>
							<table id="dataTable_suscriptores" class="display" style="width:100%">
								<thead>
									<tr>
										<th><input type="checkbox" id="selectAllSuscriptores" class="select-checkbox" data-tabla="dataTable_suscriptores"></th>
										<th style="width:400px;">Nombre</th>
										<th>Email</th>
									</tr>
								</thead>
								<tfoot>
								</tfoot>
							</table>

						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="card">
			<div class="card-header" id="headingTwo">
				<h5 class="mb-0">
					<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseGrupos" aria-expanded="false" aria-controls="collapseTwo">
						Grupos
					</button>
				</h5>
			</div>
			<div id="collapseGrupos" class="4 collapse" aria-labelledby="headingTwo" data-parent="#accordion">
				<div class="card-body">
					<div class="card">
						<div class="card-body">
							<h4 class="card-title">Seleccione los Grupos a incluir el newsletter</h4>
							<span id="grupos_error" class="invalid-feedback" style="display:block;"></span>
							<table id="dataTable_grupos" class="display" style="width:100%">
								<thead>
									<tr>
										<th><input type="checkbox" id="selectAllGrupos" class="select-checkbox" data-tabla="dataTable_grupos"></th>
										<th style="width:400px;">Nombre</th>
										<th>Detalle</th>
										<th>Suscriptores</th>
										<th></th>
										<th></th>
									</tr>
								</thead>
								<tfoot>
								</tfoot>
							</table>

						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="card">
			<div class="card-header" id="headingThree">
				<h5 class="mb-0">
					<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
						Ver
					</button>
				</h5>
			</div>
			<div id="collapseThree" class="3 collapse" aria-labelledby="headingThree" data-parent="#accordion">
				<div class="card-body">
					<div class="col-12" id="response_ajax"><?= $news['body'] ?></div>

				</div>
			</div>
		</div>
	</div>
</div>
</div>

