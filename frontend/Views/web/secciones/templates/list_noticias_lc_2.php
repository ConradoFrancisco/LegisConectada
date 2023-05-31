		<div class="row" id="lista_noticias">

			<?php if(count($noticias_destacadas) > 0 ):?>

			<?php foreach($noticias_destacadas as $data){?>

			<?php
// quito la provincia cuando es publicacion de LC
																				
if($data->is_legis_conectadas == 1 || $data->nombre_legis =='Legislaturas Conectadas'){
	$data->provincia = '<br>';
}
 ?>
			<div class="col-md-4 single-bolg hover01  d-flex" title="<?= $data->nombre_legis;?>">
				<div class="contenedor_noticia flex-fill py-2">
					<div class="blog-img">
						<div class="blog-img-graph"><span><?= $data->nombre_legis?></span></div>
						<figure style="background: url(<?php echo base_url(); ?>/static/web/images/slider/banner_paginas_2.png) center;  height: 250px;display: flex;align-items: center;justify-content: center;">
							<img src="<?= base_url(). $data->foto ?>" class="img-responsive ig-thumbnail" style=" position: relative;margin: auto;top: 0;left: 0;right: 0;bottom: 0;">
						</figure>
						<div class="px-2">
							<?= '<span class=fechaNoticia>'.fecha_es($data->fecha_add) .' </span> ' ?>

						</div>
					</div>
					<div class="blog-content px-2">
						<?php 
							$segments = array('Prensa',convert_accented_characters(url_title($data->titulo), 'underscore', TRUE),$data->id);
						?>
						<a href="<?= base_url($segments) ?>"><?php echo $data->titulo?></a>
						<div>
							<?php if(is_array($data->sounds) && !empty($data->sounds)):?>
							<i style="font-size:24px;color: #4a7ea2;" class="fa fa-soundcloud fa-3"></i><i>Notas de Audio</i>
							<?php endif;?>
						</div>
						<div class=" detalles px-2">
							<?php
							if(strip_tags($data->resumen)== ''){
							 echo trim(strip_tags($data->cuerpo));
						}else{
							 echo trim(strip_tags($data->resumen));
							}
							?>
							<!-- <div><i class="fa fa-building"></i><?= $data->nombre_legis?></div>
						<div><i class="fa fa-globe"></i><?= $data->nombre_ambito?></div>
						<div><i class="fa fa-info"></i><?= $data->nombre_tematica?></div>
						<div><i class="fa fa-clock-o"></i><?=  fecha_es($data->fecha_add,"d F a")?></div>
						-->

						</div>

					</div>
				</div>
			</div>

			<?php } ?>

			<?php else:?>
			<div class="padding-top-large"></div>
			<div class="container">

				<div class="row  justify-content-md-center">
					<div>
						Ningún dato disponible en esta sección

					</div>
				</div>
			</div>

			<?php endif;?>
		</div>