
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<style>
	.datatable {
		padding: 0 !important;
	}

	.text-muted {
		margin: 0 15px;
	}

	a.btn-xs {
		margin-left: 5px;
	}

	.toolbar {
		padding: 10px 0;
		color: #fb3c02 !important;
		font-size: 14px;
	}
</style>

<div class="card">
	<div class="card-body">
		<h4 class="card-title">Agregar Medio</h4>
		<?php
		$attributes = array('id' => 'myform');
		echo form_open_multipart('Manager/Red', $attributes);
		?>
		<div class="row">
		<?php
			echo form_error('id_link','	<div class="invalid-feedback" style="display:block;">',"</div>");
		?>
			<input type="hidden" class="form-control" id="id_link" name="id_link" value="<?php echo set_value('id_link'); ?>">
			<input type="hidden" class="form-control" id="orden_link" name="orden_link" value="<?= $orden?>">

			<?php
			$atributos = array(
				'class' => 'select2  custom-select ',
				'id' => 'selectIdPais',
			);
			?>
			<div class="form-group col-md-3 d-none">
				<label>Pais:</label>
				<?= form_dropdown('id_pais', $data_select_pais, set_value('id_pais'), $atributos); ?>
				<span class="aclaracion">* Campo requerido</span>
				<?php echo form_error('id_pais', '<div class="invalid-feedback" style="display:block;">', "</div>"); ?>
			</div>
			<div class="form-group col-md-3">
			<?php
			$atributos['id'] = 'categoria_link';
			?>
				<label>Tipo de Medio:</label>
				<?= form_dropdown('categoria_link', $data_select_medios_categorias, set_value('categoria_link'), $atributos); ?>
				<span class="aclaracion">* Campo requerido</span>
				<?php echo form_error('categoria_link', '<div class="invalid-feedback" style="display:block;">', "</div>"); ?>
			</div>
			<div class="form-group  col-md-3 d-none">
				<label>Provincia / Región: </label>
				<?php
				$js = array(
					'id' => 'select_provincias',
					'class' => 'select2  custom-select ',
				);
				?>
				<?= form_dropdown('id_provincia', $data_select_provincia, set_value('id_provincia'), $js); ?>
				<span class="aclaracion">* Campo requerido</span>
				<?php echo form_error('id_provincia', '<div class="invalid-feedback" style="display:block;">', "</div>"); ?>
				<div class="row" id="response_ajax"></div>
			</div>
			<div class="form-group  col-md-3 d-none">
				<label>Localidad: </label>
				<?php
				$js = array(
					'id' => 'select_localidades',
					'class' => 'select2  custom-select ',
				);
				?>
				<?= form_dropdown('id_localidad', $data_select_localidades, set_value('id_localidad'), $js); ?>
				<span class="aclaracion">* Campo requerido</span>
				<?php echo form_error('id_localidad', '<div class="invalid-feedback" style="display:block;">', "</div>"); ?>
				<div class="row" id="response_ajax_loca"></div>
			</div>
		</div>
		<div class="row">

			<div class="col-md-6 form-group m-t-20">
				<label>Nombre<small class="text-muted">campo requerido</small></label>
				<input type="text" class="form-control" id="titulo_link" name="titulo_link" value="<?php echo set_value('titulo_link'); ?>">
				<?php
				echo form_error('titulo_link', '	<div class="invalid-feedback" style="display:block;">', "</div>");
				?>
			</div>
			<div class="col-md-6 form-group m-t-20">
				<label>Url<small class="text-muted">campo requerido</small></label>
				<input type="text" class="form-control" id="url_link" name="url_link" value="<?php echo set_value('url_link'); ?>">
				<?php

				echo form_error('url_link', '	<div class="invalid-feedback" style="display:block;">', "</div>");
				?>
			</div>
		</div>
		<div class="row">
			<div class="col-12"><h4>Redes Sociales</h4>	</div>
				<div class="col-sm-3">
					<?php
						$data = array(
							'class' => '',
						);
						echo form_label('Facebook:', 'telefono', $data);
	
						$data = array(
							'name'  => 'facebook',
							'id'    => 'facebook',
							'class' => 'form-control',
							'value' => set_value('facebook')
//									'placeholder' =>	'Detalle categoría',
//									'required'    => 	'required'
						);

						echo form_input($data);	
						echo form_error('facebook','<div class="invalid-feedback" style="display:block;">',"</div>");
						?>
					<!--						<input type="text" class="form-control" name="detalle" placeholder="Last Name Here">-->
				</div>

				<div class="col-sm-3">
					<?php
						$data = array(
							'class' => '',
						);
						echo form_label('twitter:', 'url', $data);

					$data = array(
							'name'  => 'twitter',
							'id'    => 'twitter',
							'class' => 'form-control',
							'value' => set_value('twitter'),
//						'placeholder' =>	'Detalle categoría',
//						'required'    => 	'required'
						);

					echo form_input($data);	
					echo form_error('twitter','<div class="invalid-feedback" style="display:block;">',"</div>");

						?>
				</div>
				<div class="col-sm-3">
					<?php
						$data = array(
							'class' => '',
						);
						echo form_label('Instagram:', 'instagram', $data);
						$data = array(
							'name'  => 'instagram',
							'id'    => 'instagram',
							'class' => 'form-control ',
							'value' => set_value('instagram')
//						'placeholder' =>	'Detalle categoría',
//						'required'    => 	'required'
							);

							echo form_input($data);	
							echo form_error('instagram','<div class="invalid-feedback" style="display:block;">',"</div>");

						?>
					<!--						<input type="text" class="form-control" name="detalle" placeholder="Last Name Here">-->
				</div>
				<div class="col-sm-3">
					<?php
						$data = array(
							'class' => '',
						);
						echo form_label('Página de Perfil de YouTube:', 'youtube', $data);
						$data = array(
							'name'  => 'youtube',
							'id'    => 'youtube',
							'class' => 'form-control ',
							'value' => set_value('youtube')
//						'placeholder' =>	'Detalle categoría',
//						'required'    => 	'required'
							);

							echo form_input($data);	
							echo form_error('youtube','<div class="invalid-feedback" style="display:block;">',"</div>");
						?>
						<span class="aclaracion">Url del Perfil de la Legislatura en YouTube</span>
					<!--						<input type="text" class="form-control" name="detalle" placeholder="Last Name Here">-->
				</div>

			</div>
		<div class="row">

			<div class=" col-lg-6">
				<div class="form-group ">
					<?php
					$data = array(
						'class' => '',
					);
					echo form_label('Agregar imagen:', 'link_imagen', $data);

					$data = array(
						'type'  => 'file',
						'name'  => 'link_imagen',
						'id'    => 'link_imagen',
						'class' => 'form-control ',
						//						'placeholder' =>	'Detalle categoría',
						//						'required'    => 	'required'
					);
					echo form_input($data);
					echo form_error('link_imagen', '<div class="invalid-feedback" style="display:block;">', "</div>");
					?>
				</div>
			</div>
		</div>
		<div class="">
			<div class="form-group d-none">
				<style>
					.select2-selection__choice {
						background-color: #0057b1 !important;
					}
				</style>
				<?php
				//				var_dump($_POST);
				?>
				<?php echo '<label>Seleccione categorias:</label> (Opcional)'; ?> <br />
				<!--
							<select class="js-example-basic-multiple form-control" name="categorias[]" multiple="multiple">
								<option value="AL">Alabama</option>
								<option value="WY">Wyoming</option>
							</select>
-->

				<?php

				echo '<select class="js-example-basic-multiple form-control" name="categorias[]" data-placeholder="Seleccione categorías" id="cars" multiple>';

				foreach ($data_select_categoria as $data => $value) {
					if (isset($_POST['categorias'])) {
						//						echo '<br>'.$data;die();
						$selected = '';
						if (in_array($data, $_POST['categorias'])) {
							$selected = 'selected="selected"';
						}

						echo '<option value="' . $data . '" ' . $selected . '>' . $value . '</option>';
					} else {
						echo '<option value="' . $data . '">' . $value . '</option>';
					}
				}
				echo '</select>';

				?>
				<?php echo form_error('categorias[]', '<div class="invalid-feedback" style="display:block;">', "</div>"); ?>
			</div>
		</div>
		<div class="form-group m-t-20">
			<label>Descripción:<small class="text-muted">campo requerido</small></label>
			<textarea name="detalle_link" id="detalle_link" cols="50" rows="3" class="form-control"><?php echo set_value('detalle_link'); ?></textarea>
			<?php

			echo form_error('detalle_link', '	<div class="invalid-feedback" style="display:block;">', "</div>");
			?>
		</div>
		<div class="border-top">
			<div class="card-body">
				<button name="cargar_dato" type="submit" class="btn btn-success">Enviar Datos</button>
			</div>
		</div>
		<?php
		echo form_close();
		?>
	</div>
</div>

<div class="card">
	<div class="card-body datatable">
		<div class="table-responsive  text-left" style="font-size: 12px;">
			<div id="zero_config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
				<table id="table_links" class="display" style="width:100%">
					<thead>
						<tr>
							<th></th>
							<th>Orden</th>
							<th>Id</th>
							<th>Título</th>
							<th>Detalle</th>
							<th>Url</th>
							<th>Estado</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody></tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<script>

	<?php
if(form_error('id_localidad')){
	?>
	var localidad = true;
	
	<?php
}else{
	?>
	
	var localidad = false;
	
	<?php
}
?>
</script>