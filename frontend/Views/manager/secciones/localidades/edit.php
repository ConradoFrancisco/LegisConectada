<!--

object(stdClass)[35]
  public 'id' => string '1' (length=1)
  public 'nombre' => string 'Buenos Aires' (length=12)
  public 'zona' => string 'AR-B' (length=4)
  public 'estado' => string '1' (length=1)
  public 'comentario' => null
  public 'color' => string '#7DBDEC' (length=7)
  public 'camara' => string 'Bicameral' (length=9)
  public 'user_add' => string '1' (length=1)
  public 'fecha_add' => string '2019-10-29 12:58:40' (length=19)
  public 'user_upd' => string '0' (length=1)
  public 'fecha_upd' => null
  public 'nombre_upd' => null
  public 'ape_upd' => null
  public 'nombre_add' => string 'Carlos' (length=6)
  public 'ape_add' => string 'Tutino' (length=6)
  public 'id_localidad' => string '1' (length=1)
  public 'nom_provicia' => string 'Buenos Aires' (length=12)
  public 'id_camara' => string '2' (length=1)
-->

<?php
//
//var_dump($tipo_camara);
//echo '<pre>';
//var_dump($localidad);
//echo '</pre>';

?>
<div class="row">
	
	<div class="col-md-4 ">
		<a href="<?= base_url('Manager/localidades/')?>">
			<div class="card card-hover">
				<div class="box  text-center" style="background-color: #00b19d;">
					<h1 class="font-light text-white"><i class="fas fa-list"></i></h1>
					<h6 class="text-white">listado localidads</h6>
				</div>
			</div>
		</a>
	</div>
</div>
<div class="card col-md-12">
		<?php
		$attributes = array(
			'class' => 'form-horizontal', 
			'id' => 'myform',
			'autocomplete' => 'off',
		);
			echo form_open_multipart('/Manager/Localidades/edit/'. $localidad->id,$attributes);
		?>
	<div class="card-body">
		<h5 class="card-title m-b-0">Editar localidad</h5>
		<div class="row">
		<div class="form-group col-md-1">

			<label>ID:</label>
			<input type="hidden" class="form-control date-inputmask" name="id" value="<?= $localidad->id?> " >
			<input type="text" class="form-control date-inputmask" name="id_cat" value="<?= $localidad->id?> " disabled>
			</div>
			<div class="form-group col-md-2">
				<label>Usuario Alta</label>
				<input type="text" class="form-control international-inputmask" name="user_add"  value="<?= $localidad->nombre_add.','.$localidad->ape_add?> " disabled>
			</div>
			<div class="form-group col-md-2">
			<label>Fecha Alta</label>
			<input type="text" class="form-control date-inputmask" name="fecha-alta"  value="<?= fecha_es($localidad->fecha_add, "d F a",TRUE)?> " disabled>
		 </div>

			<div class="form-group col-md-2">
				<label>Modificado por:</label>
				<input type="text" class="form-control international-inputmask" name="user_upd"  value="<?= $localidad->nombre_upd.','.$localidad->ape_upd?>" disabled>
			</div>
		<div class="form-group col-md-2">
			<label>Ultima Mod:</label>
			<input type="text" class="form-control phone-inputmask" name="fechaupd" value="<?= $localidad->fecha_upd?> "  disabled>
		</div>
		</div>
		<div class="row">

			<div class="form-group col-md-3">
				<label>Pais </label>
				<?php 
					$atributos =array(
						'class'=>'select2 form-control select2-hidden-accessible'
					)
				?>
					<?= 	form_dropdown('pais', $data_select_pais,$localidad->id_pais, $atributos); ?>
				<?php echo form_error('pais','<div class="invalid-feedback" style="display:block;">',"</div>");?>
				<span class="aclaracion">* Campo requerido</span>
			</div>
            <div class="col-md-3">
				<label>Provincia: </label>

				<?= 	form_dropdown('provincia', $data_select_provincia,$localidad->id_provincia, $atributos); ?>
				<?php echo form_error('provincia','<div class="invalid-feedback" style="display:block;">',"</div>");?>
			</div>


			<div class="form-group col-md-3">
				<label>Nombre </label>
				<input type="text" class="form-control xphone-inputmask" name="nombre" value="<?= $localidad->nombre ?>">
				<span class="aclaracion">* Campo requerido</span>
				<?php echo form_error('nombre','<div class="invalid-feedback" style="display:block;">',"</div>");?>
			</div>


		</div>
		<div class="row">
			<div class="form-group col-md-3">
				<label>Habitantes: </label>
				<input type="text" class="form-control purchase-inputmask" name="habitantes" value="<?= $localidad->habitantes?>" >
			</div>
			<div class="form-group col-md-3">
				<label>Superficie: </label>
				<input type="text" class="form-control purchase-inputmask" name="superficie" value="<?= $localidad->superficie?>" >
			</div>			
			<div class="form-group col-md-3">
			<label>Latitud: </label>
				<input type="text" class="form-control purchase-inputmask" name="latitud" value="<?= $localidad->latitud?>" >
			</div>			
			<div class="form-group col-md-3">
				<label>Longitud: </label>
				<input type="text" class="form-control purchase-inputmask" name="longitud" value="<?= $localidad->longitud?>" >
			</div>
			
		</div>
		<div class="row">

			<?php if($localidad->escudo != ''):?>
			<div class=" col-lg-6">
				<div class="form-group col-lg-6">

					<div class="col-lg-12">
						<img class="img-thumbnail" src="<?= base_url($localidad->escudo)?>?time=<?= time()?>" alt="">
					</div>
						<div class="col-lg-12">
								<a href="#" data-url="<?=$localidad->escudo?>" data-estado="1"
									data-id="<?=$localidad->id?>" class="borrar_imagen btn btn-danger btn-xs"><i
										class="fas fa-trash-alt" title="Borrar"></i> </a>
									</div>
									<?php endif;?>

			</div>
			<div class="form-group ">
				<?php
					$data = array(
						'class' => '',
					);
					echo form_label('Cambiar Escudo:', 'escudo', $data);

					$data = array(
						'type'  => 'file',
						'name'  => 'escudo',
						'id'    => 'escudo',
						'class' => 'form-control ',
						'value' => $localidad->escudo,
		//						'placeholder' =>	'Detalle categoría',
		//						'required'    => 	'required'
					);
					echo form_input($data);	
					echo form_error('escudo','<div class="invalid-feedback" style="display:block;">',"</div>");
					?>
				<input type="hidden" class="form-control" id="mi_escudo" name="mi_escudo" value="<?= $localidad->escudo ?>" readonly>
				<input type="hidden" class="form-control" id="nuevo_escudo" name="nuevo_escudo" value="<?= $localidad->escudo ?>" readonly>
			</div>
			</div>
	</div>
	<div class="row">

	<div class="form-group col-md-12 ">
		<label style="display: block;">Comentario </label>
		<textarea rows="6"   style="width: 100%;" name="comentario" id="comentario"><?= $localidad->comentario?> </textarea>
	</div>

	</div>

	<div class="border-top">
		<div class="card-body">
		<?php
			$data = array(
				'class'       => 	'btn btn-success',
			);
			 echo form_submit('botonSubmit', 'Enviar', $data);
		?>
	<!--					<button type="submit" class="btn btn-success ">Enviar</button>-->
		</div>
	</div>
	<?php echo form_close()?>
	</div>
</div>
<script>
var inicial = false;
</script>
