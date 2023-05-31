<pre>

    <?php

// var_dump($link);

?>
</pre>
<div class="row">
    <div class="col-md-3 ">
        <a href="<?= base_url('Manager/Red/')?>">
            <div class="card card-hover">
                <div class="box  text-center" style="background-color:  #f7aa47;">
                    <h1 class="font-light text-white"><i class="fas fa-list"></i></h1>
                    <h6 class="text-white">Red de medios</h6>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-6 col-lg-3 d-none">
        <a href="http://lc.prod/Manager/Legislaturas/">
            <div class="card card-hover">
                <div class="box  text-center" style="background-color: #00b19d;">
                    <h1 class="font-light text-white"><i class="fas fa-pencil-alt"></i></h1>
                    <h6 class="text-white">Agregar Organismos</h6>
                </div>
            </div>
        </a>
    </div>
</div>
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
        <h4 class="card-title">Editar Medio</h4>
        <?php
		$attributes = array('id' => 'myform');
		echo form_open_multipart('Manager/Red/editar/'.$link->id_link, $attributes);
		?>
        <div class="row">
            <?php
			echo form_error('id_link','	<div class="invalid-feedback" style="display:block;">',"</div>");
		?>
            <input type="hidden" class="form-control" id="id_link" name="id_link" value="<?= $link->id_link; ?>">

            <?php
			$atributos = array(
				'class' => 'select2  custom-select ',
				'id' => 'selectIdPais',
			);
			?>
            <div class="form-group col-md-3">
                <label>Pais:</label>
                <?= form_dropdown('id_pais', $data_select_pais, $link->id_pais, $atributos); ?>
                <span class="aclaracion">* Campo requerido</span>
                <?php echo form_error('id_pais', '<div class="invalid-feedback" style="display:block;">', "</div>"); ?>
            </div>
            <div class="form-group  col-md-3">
                <label>Provincia / Región: </label>
                <?php
				$js = array(
					'id' => 'select_provincias',
					'class' => 'select2  custom-select ',
				);
				?>
                <?= form_dropdown('id_provincia', $data_select_provincia, $link->id_provincia, $js); ?>
                <span class="aclaracion">* Campo requerido</span>
                <?php echo form_error('id_provincia', '<div class="invalid-feedback" style="display:block;">', "</div>"); ?>
                <div class="row" id="response_ajax"></div>
            </div>
            <div class="form-group  col-md-3">
                <label>Localidad: </label>
                <?php
				$js = array(
					'id' => 'select_localidades',
					'class' => 'select2  custom-select ',
				);
				?>
                <?= form_dropdown('id_localidad', $data_select_localidades, $link->id_localidad, $js); ?>
                <span class="aclaracion">* Campo requerido</span>
                <?php echo form_error('id_localidad', '<div class="invalid-feedback" style="display:block;">', "</div>"); ?>
                <div class="row" id="response_ajax_loca"></div>
            </div>
        </div>
        <div class="row">

            <div class="col-md-6 form-group m-t-20">
                <label>Nombre<small class="text-muted">campo requerido</small></label>
                <input type="text" class="form-control" id="titulo_link" name="titulo_link"
                    value="<?php echo $link->titulo_link; ?>">
                <?php
				echo form_error('titulo_link', '	<div class="invalid-feedback" style="display:block;">', "</div>");
				?>
            </div>
            <div class="col-md-6 form-group m-t-20">
                <label>Url<small class="text-muted">campo requerido</small></label>
                <input type="text" class="form-control" id="url_link" name="url_link"
                    value="<?php echo $link->url_link; ?>">
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
							'value' => set_value('facebook',$link->facebook)
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
							'value' => set_value('twitter',$link->twitter),
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
							'value' => set_value('instagram',$link->instagram)
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
							'value' => set_value('youtube',$link->youtube)
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

                <?php if($link->link_imagen !=''):?>
                <div class="form-group col-lg-6">
                    <div class="col-lg-12">
                        <img class="img-thumbnail" src="<?= base_url($link->link_imagen)?>?time=<?= time();?>" alt="">
                    </div>
                    <div class="col-lg-12">
                        <?php if($link->link_imagen != 'static/web/images/slider/banner_1.png'):?>
                        <a href="#" data-url="<?=$link->link_imagen?>" data-estado="1"
                            data-id_link="<?=$link->id_link?>" class="borrar_imagen btn btn-danger btn-xs"><i
                                class="fas fa-trash-alt" title="Borrar"></i> </a>
                        <?php endif;?>
                    </div>
                </div>
                <?php endif;?>

                <div class="form-group ">
                    <?php
					$data = array(
						'class' => '',
					);
					echo form_label('Cambiar Foto:', 'link_imagen', $data);

					$data = array(
						'type'  => 'file',
						'name'  => 'link_imagen',
						'id'    => 'link_imagen',
						'class' => 'form-control ',
						
		//						'placeholder' =>	'Detalle categoría',
		//						'required'    => 	'required'
					);
					echo form_input($data);	
					echo form_error('link_imagen','<div class="invalid-feedback" style="display:block;">',"</div>");
					?>
                    <input type="hidden" class="form-control" id="mi_imagen" name="mi_imagen"
                        value="<?= $link->link_imagen ?>" readonly>
                    <input type="hidden" class="form-control" id="nuevo_imagen" name="nuevo_imagen"
                        value="<?= $link->link_imagen ?>" readonly>
                </div>
            </div>
        </div>
        <?php
					// var_dump($link->cateLink);
	?>
        <div class="">
            <pre>

			<?php
		// var_dump($data_select_categoria);
		?>
		</pre>
            <div class="form-group d-none">
                <style>
                .select2-selection__choice {
                    background-color: #0057b1 !important;
                }
                </style>
                <?php  
//				var_dump($_POST);
 ?>
                <?php echo '<label>Seleccione categorias</label>';?> <br />
                <!--
							<select class="js-example-basic-multiple form-control" name="categorias[]" multiple="multiple">
								<option value="AL">Alabama</option>
								<option value="WY">Wyoming</option>
							</select>
-->

                <?php 

				echo '<select class="js-example-basic-multiple form-control" name="categorias[]" data-placeholder="Seleccione categorías" id="cars" multiple>';
				
				foreach($data_select_categoria as $data=>$value){
					if(isset($_POST['categorias'])){
					
//						echo '<br>'.$data;die();
						$selected = '';
							if (in_array($data, $link->cateLink)) {
    						// $selected ='selected="selected"';
							}
	
						echo '<option value="'.$data.'" '.$selected.'>'.$value.'</option>';
					}elseif(isset($link->cateLink)){

						$selected = '';
						foreach($link->cateLink as $cate){
							echo '->'.$cate->id;
							
							// if(array_key_exists($cate->id, $data_select_categoria)) {
							// 	$selected ='selected="selected"';
							// }else{
							// }
						}
						echo '<option value="'.$data.'" '.$selected.'>'.$value.'</option>';

					}else{
				
						echo '<option value="'.$data.'">'.$value.'</option>';
					}
				}
				echo '</select>';

 ?>
                <?php echo form_error('categorias[]','<div class="invalid-feedback" style="display:block;">',"</div>");?>
            </div>
        </div>
        <div class="form-group m-t-20">
            <label>Descripción:<small class="text-muted">campo requerido</small></label>
            <textarea name="detalle_link" id="detalle_link" cols="50" rows="3"
                class="form-control"><?php echo $link->detalle_link; ?></textarea>
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