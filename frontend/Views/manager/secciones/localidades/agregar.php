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
  public 'id_provincia' => string '1' (length=1)
  public 'nom_provicia' => string 'Buenos Aires' (length=12)
  public 'id_camara' => string '2' (length=1)
-->

<?php
//
//var_dump($tipo_camara);
//echo '<pre>';
//var_dump($provincia);
//echo '</pre>';
//		echo '<pre>';
//		var_dump($post);
//		echo '</pre>';

?>

<div class="row ">
    <div class="col-md-3 ">
        <a href="<?= base_url('Manager/Localidades/')?>">
            <div class="card card-hover">
                <div class="box  text-center" style="background-color:  #f7aa47;">
                    <h1 class="font-light text-white"><i class="fas fa-list"></i></h1>
                    <h6 class="text-white">Listar Localidades</h6>
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
			echo form_open_multipart('/Manager/Localidades/agregar/',$attributes);
		?>
    <input type="hidden" class="" name="estado" value="1">
    <input type="hidden" class="" name="user_add" value="<?= $this->user->id?>">
    <div class="card-body">
        <h5 class="card-title m-b-0">Agregar Localidad</h5>
        <div class="row">

            <?php
            $atributos = array(
            'class'=>'select2 form-control custom-select select2-hidden-accessible',
            'id'=>'selectIdPais',
            );
            ?>
            <div class="form-group col-md-3">
                <label>Pais:</label>
                <?= 	form_dropdown('id_pais', $data_select_pais,set_value('id_pais'), $atributos); ?>
                <?php echo form_error('id_pais','<div class="invalid-feedback" style="display:block;">',"</div>");?>
                <span class="aclaracion">* Campo requerido</span>
            </div>
            <div class="form-group  col-md-3">
                <label>Provincia / Región: </label>
                <?php
		$js = array(
			'id'=>'select_provincias',
			'class'=>'select2 form-control custom-select select2-hidden-accessible',
		);	
			
		?>
                <?= form_dropdown('id_provincia', $data_select_provincia, set_value('id_provincia'), $js); ?>
                <span class="aclaracion">* Campo requerido</span>
                <?php echo form_error('id_provincia','<div class="invalid-feedback" style="display:block;">',"</div>");?>
            </div>

            <div class="form-group col-md-8">
                <label>Nombre Localidad </label>
                <input type="text" class="form-control xphone-inputmask" name="nombre"
                    value="<?= set_value('nombre')?>">
                <span class="aclaracion">* Campo requerido</span>
                <?php echo form_error('nombre','<div class="invalid-feedback" style="display:block;">',"</div>");?>
            </div>


        </div>
        <div class="row">

            <div class="form-group col-md-3">
                <label>Habitantes: </label>
                <input type="text" class="form-control purchase-inputmask" name="habitantes"
                    value="<?= set_value('habitantes')?>">
            </div>
            <div class="form-group col-md-3">
                <label>Superficie: </label>
                <input type="text" class="form-control purchase-inputmask" name="superficie"
                    value="<?= set_value('superficie')?>">
            </div>
            <div class="form-group col-md-2">
                <label>Latitud: </label>
                <input type="text" class="form-control purchase-inputmask" name="latitud"
                    value="<?= set_value('latitud')?>">
            </div>
            <div class="form-group col-md-2">
                <label>Longitud: </label>
                <input type="text" class="form-control purchase-inputmask" name="longitud"
                    value="<?= set_value('longitud')?>">
            </div>

        </div>
        <div class="row">

            <div class=" col-lg-6">
                <div class="form-group ">
                    <?php
					$data = array(
						'class' => '',
					);
					echo form_label('Agregar Escudo:', 'escudo', $data);

					$data = array(
						'type'  => 'file',
						'name'  => 'escudo',
						'id'    => 'escudo',
						'class' => 'form-control ',
		//						'placeholder' =>	'Detalle categoría',
		//						'required'    => 	'required'
					);
					echo form_input($data);	
					echo form_error('escudo','<div class="invalid-feedback" style="display:block;">',"</div>");
					?>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="form-group col-md-12 ">
                <label style="display: block;">Comentario </label>
                <textarea rows="6" style="width: 100%;" name="comentario" id="comentario"></textarea>
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