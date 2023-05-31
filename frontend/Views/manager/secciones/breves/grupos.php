
<script>
var datosSus = <?php echo json_encode($suscriptores=array()); ?>;
</script>
<div class="row">
	<div class="card-body">
		<div class="card">
			<div class="card-body">
				<h4 class="card-title">Grupos de suscriptores</h4>
				<span id="publicaciones_error" class="invalid-feedback" style="display:block;"></span>
				<table id="dataTable_grupos" class="display" style="width:100%">
					<thead>
						<tr>
							<th>#</th>
							<th>Nombre</th>
							<th>Detalle</th>
							<th style="width: 30px;">Suscriptores</th>
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
<div class="row">
	<div class="card-body ">
		<div class="card ">
			<div class="card-body">
				<div class="row">
		
					<div class="col-4">
						<h4 class="card-title">Título del grupo</h4>

						<!--					<label for="fname" class="col-sm-3 text-right control-label col-form-label">Nombre</label>-->
						<?php
						$data = array(
							'class' => '',
						);
						echo form_label('', 'asunto', $data);
						?>
						<?php

						$data = array(
							'name'  => 'asunto',
							'id'    => 'asunto',
							'class' => 'form-control',
							'value' => set_value('asunto')
							//								'placeholder' =>	'Nombre categoría',
							//								'required'    => 	'required'
						);

						echo form_input($data);
						?>
						<span id="asunto_error" class="invalid-feedback" style="display:block;"></span>
						<span class="aclaracion">* Campo requerido</span>
					</div>

					<div class="col-4">
						<h4 class="card-title">Detalle</h4>

						<!--					<label for="fname" class="col-sm-3 text-right control-label col-form-label">Nombre</label>-->
						<?php
						$data = array(
							'class' => '',
						);
						echo form_label('', 'detalle', $data);
						?>
						<?php

						$data = array(
							'name'  => 'detalle',
							'id'    => 'detalle',
							'class' => 'form-control',
							'value' => set_value('detalle')
							//								'placeholder' =>	'Nombre categoría',
							//								'required'    => 	'required'
						);

						echo form_input($data);
						?>
						<span id="detalle_error" class="invalid-feedback" style="display:block;"></span>
						<span class="aclaracion"></span>
					</div>
					<div class="mt-3 col-md-3" id="send_grupo">
						<div class="card card-hover">
							<div class="box bg-success text-center">
								<h1 class="font-light text-white"><i class=" far fa-newspaper"></i></h1>
								<h6 class="text-white">Guardar Grupo</h6>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card-body">
							<div class="card">
								<div class="card-body">
									<h4 class="card-title">Seleccione los suscriptores a incluir el grupo</h4>
									<div class=" text-danger" id="suscriptores_error"></div>
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
			</div>
		</div>
	</div>
</div>
</div>

</div>