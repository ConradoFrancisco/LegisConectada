<style>
	/*30/04/2020
	CAT CAMBIO CSS DE MEDIDA DE BLOQUE DE NOTICIA
	*/
	div.detalles {
		/*
	min-height: 100px;
	max-height: 100px;
*/
		/* word-break: break-all; */
		line-height: 1.4 !important;
		padding-bottom: 15px !important;
	}

	.bussiness-about-company .single-bolg {
		padding-bottom: 25px !important;
	}

	.single-bolg img {

		max-height: inherit !important;
	}

	.blog-img-graph {
		position: absolute;
		top: 0;
		padding: 2px;
		background: rgba(0, 0, 0, 0.42);
		width: 92.2%;
		text-align: right;
		/*
	box-shadow: azure;
	text-shadow: 2px 2px 1px 0px #f0f0f0;
*/
		color: #ffffff;
		font-size: 12px;
	}

	.blog-content a {
		margin: 1px 0 5px 0 !important;
	}

	.contenedor_noticia {
		background-color: #fff;
		margin: 0 0 10px 0;

		/*
		min-height: 380px;
    max-height: 380px;
*/
	}

	.business-cta-1x {
		padding: 15px 0;
	}
</style>
<?php
////
//$separador = $slider[0];
// echo '<pre>';
// var_dump($separador);
//////// var_dump($this->provincias);
// echo '</pre>';
//
//
//die();
//
//	$prov_nombre_actual= '';
//
//foreach($slider as $slide){
//
//	if($prov_nombre_actual == $slide->nombre_prov){
//		$prov_nombre_actual='';
//	}else{
//		$prov_nombre_actual= $slide->nombre_prov;
////		echo '<br>-->> '.$prob;
//	}
//	
//}

/*
 ["nombre_prov"]=>
    string(10) " Tocopilla"
    ["zona_prov"]=>
    string(5) "CL-AN"
    ["id_camara"]=>
    string(1) "1"
    ["id"]=>
    string(1) "6"
    ["nombre"]=>
    string(9) "Municipio"
    ["nombre_pais"]=>
    string(5) "Chile"

*/

// inicio la variable para no repetir organimsos de bicamerales
//	$prov_nombre_actual= '';
?>


<?php

////echo anchor('news/local/123', 'My News', array('title' => 'The best news!'));
//
////echo '<pre>'.var_dump($slider).'</pre>';
//$provincias2 = json_decode(json_encode($this->provincias), true);	
//			 
////informacion de provincias para el mapa
//$names = '';
//$labels = '';	
//$colors_regions = '';			 
//$colors_camaras = '';	
//$marker = "";			 
//foreach ($provincias2 as $provincia){
//	
//	//marker para caba
//	if ($provincia["zona_provincia"]=="AR-C"){
//		$marker = "
//		name: '".$provincia["nombre_provincia"]."',
//		labels: '".$provincia["nombre_camara"]."',
//		code: '".$provincia["zona_provincia"]."',
//		style: {fill: '".$provincia["color_camara"]."', r:15}
//		";
//		
//	}
//	
//	$names .= "'".$provincia["zona_provincia"]."': '".$provincia["nombre_provincia"]."',
//	";
//	
//	$labels .= "'".$provincia["zona_provincia"]."': '".$provincia["nombre_camara"]."',	
//	";
//	
//	$colors_regions .= "'".$provincia["zona_provincia"]."': '".$provincia["color_provincia"]."',
//	";
//	
//	$colors_camaras .= "'".$provincia["zona_provincia"]."': '".$provincia["color_camara"]."',
//	";
//}
?>
<style>
	/*
	div.overlay-text {
		margin-top: 8% !important;
	}

	div.overlay-text h2 {
		letter-spacing: -5px !important;
		font-weight: 400 !important;
	}

	div.detalles_legislaturas_conectadas {
		margin-top: 60px;
		width:
	}
*/


	.tp-rightarrow {
		background: url("<?= base_url('static/manager/assets/libs/revolution/css/revolution/arror_right.png') ?>") no-repeat center center/cover;
		border-radius: 100%;
		height: 72px;
		width: 72px;
		-webkit-transition: all 0.3s ease-in-out;
		transition: all 0.3s ease-in-out;
	}

	.tp-rightarrow:hover {
		background: url("<?= base_url('static/manager/assets/libs/revolution/css/revolution/arror_right_hover.png') ?>") no-repeat center center/cover;
		border-radius: 100%;
		height: 72px;
		width: 72px;
		-webkit-transition: all 0.3s ease-in-out;
		transition: all 0.3s ease-in-out;
	}

	.tp-leftarrow {
		background: url("<?= base_url('static/manager/assets/libs/revolution/css/revolution/arror_left.png') ?>") no-repeat center center/cover;
		border-radius: 100%;
		height: 72px;
		width: 72px;
		-webkit-transition: all 0.3s ease-in-out;
		transition: all 0.3s ease-in-out;
	}

	.tp-leftarrow:hover {
		background: url("<?= base_url('static/manager/assets/libs/revolution/css/revolution/arror_left_hover.png') ?>") no-repeat center center/cover;
		border-radius: 100%;
		height: 72px;
		width: 72px;
		-webkit-transition: all 0.3s ease-in-out;
		transition: all 0.3s ease-in-out;
	}


	div.tp-caption {
		/*font-family: "Myriad-Pro"; */
		/*		font-family: "Times New Roman", Times, serif;*/
	}

	.tp-parallax-wrap {

		margin-top: 50px !important;
	}

	/*
	.tp-mask-wrap{
		
		height: 195px!important;
	}
	
*/


	.texto-borde {
		-webkit-text-stroke: 2px black;
		color: transparent;
	}

	div.slider_pais {
		font-size: 35px !important;
	}
</style>
<header>
	<?php


	$pais_actual = '';
	?>
	<?php if (empty($slider)) : ?>

		<div class="business-main-slider hidden-xs">
			<div class="owl-carousel main-slider">
				<div class="item">
					<div class="hvrbox">
						<img src="<?= base_url(); ?>static/web/images/slider/banner_1.png" alt="Legislaturas Conectadas" class="hvrbox-layer_bottom">
					</div>
				</div>
			</div>

		<?php else : ?>


			<div class="rev_slider_wrapper d-none d-sm-block">

				<!-- the ID here will be used in the JavaScript below to initialize the slider -->
				<div id="rev_slider_1" class=" slider  rev_slider" data-version="5.4.5" style="">

					<ul>
						<?php foreach ($slider as $slide) : ?>

							<?php
							// inicio del if para no repetir las provincia
							if ($pais_actual == $slide->id_provincia) {
								$pais_actual = '';
							} else {
								$pais_actual = $slide->id_provincia;
								$color_fondo = '';
								if ($slide->slider != 'static/web/images/slider/banner_1.png') {
									$color_fondo = 'background: rgb(245 245 245 / 74%);';
								}

								// segun si el tipo de camara es unicameral o bicameral armo el enlace 
								if ($slide->id_camara == 1) {

									$segments = array('Legislatura', $slide->id_legis, convert_accented_characters(url_title($slide->nombre_legis), 'underscore', TRUE));
								} else {

									$segments = array('Provincias', convert_accented_characters(url_title($slide->zona_prov), 'underscore', TRUE), convert_accented_characters(url_title($slide->nombre_prov), 'underscore', TRUE));
								}
								// FIN segun si el tipo de camara es unicameral o bicameral armo el enlace 
							?>
								<li data-transition="fade" data-link="<?= base_url($segments) ?>" data-target="">
									<!-- BEGIN TEXT LAYER -->
									<?php //echo $slide->nombre_pais 
									?>

									<div class=" tp-caption sfr font-extra-bold tp-resizeme letter-space-4 header-1 title-line-2" data-x="center" data-hoffset="0" data-y="center" data-voffset="-100" data-frames="[{&quot;delay&quot;:800,&quot;speed&quot;:1000,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;&quot;,&quot;mask&quot;:&quot;x:[-100%];y:0;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" style="<?= $color_fondo ?>z-index: 6; font-size: 50px; color: #005e83; text-transform: ; font-family: myriad-pro, sans-serif; white-space: nowrap; font-weight: 700; visibility: inherit; transition: none 0s ease 0s; text-align: inherit; line-height: 50px; border-width: 0px; margin: 0px; padding: 10px; letter-spacing: 0px;  min-width: 0px; max-height: none; max-width: none; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform-origin: 50% 50% 0px;" id="layer-<?= $slide->id_legis ?>">

										<?php
										// diferenciar entre las legislaturas y legis conectadas
										switch ($slide->id_legis) {
											case 1:
												echo  '<div>Poder Legislativo de la ' . $slide->nombre_prov . '</div>';
												echo '<div class="slider_pais">' . $slide->nombre_pais . '</div>';
												break;
											case 91:
												echo '<img id="image_slider" src="' . base_url('static/web/images/logos/logo-LC-originalcontagline.png') . '" width="200" height="239" alt="Legislaturas Conectadas">';
												break;

											default:
												if ($slide->id_pais == 3 && $slide->id_organismo == 1) {
													$tipo_organismo = 'Cámara de Senadores ';
												}
												if ($slide->id_pais == 3 && $slide->id_organismo == 2) {
													$tipo_organismo = 'Cámara de Diputados ';
												}
												$tipo_organismo = 'Poder Legislativo de ';
												echo '<span  translate="no">' . wordwrap($tipo_organismo . $slide->nombre_prov, 50, "<br>", FALSE) . '</span>';
												echo '<div class="slider_pais" translate="no">' . $slide->nombre_pais . '</div>';
										};
										//FIN diferenciar entre las legislaturas y legis conectadas
										?>
									</div>
									<!-- END TEXT LAYER -->

									<img src="<?= base_url($slide->slider); ?>" alt="Provincia de <?= $slide->nombre_prov ?>" class="rev-slidebg" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
								</li>
							<?php
								//						$pais_actual='';
							}
							// fin del if para no repetir las provincias
							?>
						<?php endforeach; ?>

					<?php endif; ?>
					</ul>
				</div>
			</div>
		</div>
</header>


<div class="business-app-present-2x " style="padding-top:20px">
	<div class="app-present-content-2">
		<div class="container">
			<div class="row" style="    border-top: 2px solid #8c8e14;
    border-bottom: 2px solid #8c8e14;">
				<div class="col-md-12">
				<center>
				 <a href="http://www.editorialox.com/" target="_blank"><img style="max-width:150px" class="img-fluid mg-thumbnail" src="<?php echo base_url()?>static/web/images/premioaltares.png" alt="Logo">  <b>Web premiada con el Premio Internacional OX</b> </a> 
				 </center>
				</div>
			</div>
		</div>
	</div>
</div>	
<div class="padding-top-large"></div>
<div class="business-app-present-2x ">
	<div class="app-present-content-2">
		<div class="container">
			<div class="row">
				<style>
					div.map_container {
						height: 700px;
					}

					.smart_map {
						width: 100%;
						height: 100%;
					}
				</style>
				<div class="col-md-6">

					<iframe width="100%" height="315" src="https://www.youtube.com/embed/AbJeqgXO4WM?controls=0&autoplay=1&showinfo=0&rel=0" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>

				<div class="col-md-6" id="legis_tab">
					<div class="detalles_legislaturas_conectadas" style="margin:0;">
						<div class="row">
							<div>


							</div>
							<div class=""><strong> la RED interparlamentaria ABIERTA a la participación CIUDADANA.</strong></div>
						</div>
						<p>Legislaturas Conectadas es una red institucional interactiva que comunica los parlamentos entre sí y con la ciudadanía.
							<br>Contamos con tres medios de comunicación
						</p>
						<style>
							span.text {
								margin-left: 5px;
							}
						</style>

						<ol class="redes">
							<li>La plataforma interactiva www.legislaturasconectadas.gob.ar que elaboramos entre todos.</li>
							<li>Nuestras RRSS:
								<style>


								</style>
								<div class="clearfix"></div>
								<div class="top-nav-social redes" style="border:0;background-color: #FFF;display:inline-grid!important;">

									<div class="facebook"><a style="background-color:#f1f1f1;" target="_blank" class="facebook" href="https://www.facebook.com/legislaturas.conectadas.arg/"> <i class="fa fa-facebook"></i> </a><span class="text">@legislaturas.conectadas.arg</span>
									</div>
									<div class="twitter">
										<a style="background-color:#f1f1f1;" target="_blank" class="twitter" href="https://twitter.com/lconectadas?lang=es"> <i class="fa fa-twitter"></i> </a><span class="text">@lconectadas</span>
									</div>
									<div class="instagram">
										<a style="background-color:#f1f1f1;" target="_blank" class="instagram" href="https://www.instagram.com/legislaturasconectadas/?hl=es-la"> <i class="fa fa-instagram"></i> </a><span class="text"> @legislaturasconectadas</span>
									</div>
									<div class="youtube">
										<a style="background-color:#f1f1f1;" href="https://www.youtube.com/channel/UC5ACdrMW0Q8GubYtDoD2Gqg" class="youtube" target="_blank"> <i class="fa fa-youtube"></i> </a><span class="text">Legislaturas Conectadas</span>
									</div>
									<div class="linkedin">
										<a style="background-color:#f1f1f1;" target="_blank" class="linkedin" href="https://www.linkedin.com/in/parlamentos-en-red-legislaturas-conectadas-55353b206"> <i class="fa fa-linkedin"></i> </a><span class="text"> Legislaturas Conectadas</span>
									</div>

								</div>

							<li>Una síntesis semanal de noticias :"Breves de noticias Parlamentarias"</li>
						</ol>

						<!--
						<div class="blog-single-social">
							<div class="footer-info-right" style="text-align: left;">
								<ul>
									<li><a href="https://www.facebook.com/legislaturas.conectadas.arg/"   target="_blank" > <i class="fa fa-facebook"></i> </a></li>										
									<li><a href="https://twitter.com/legisenred"  target="_blank"> <i class="fa fa-twitter" ></i> </a></li>											
									<li><a href="https://www.instagram.com/legislaturasconectadas/?hl=es-la"  target="_blank" > <i class="fa fa-instagram"></i> </a></li>									
								</ul>					
							</div>
						</div>
						-->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--<div class="padding-top-large"></div>-->
<div class="col-md-12">
        <div class="padding-top-middle"></div>
        <div class="business-title-middle">
            <h2>Noticias Parlamentarias</h2>
            <span class="title-border-middle"></span> 
        </div>
    </div>
    <section id="noticias">
        <div class="business-cta-1x">
            <div class="cta-content">
                 

                <div class="padding-top-middle"></div>
                <?php echo $noticias_global ?>
				
				<div class="boton-mas" style="text-align:right;margin-right:15px">

					<a href="<?= base_url('Noticias') ?>" class="bussiness-btn-larg">MÁS NOTICIAS </a>
				</div>

            </div>
        </div>
    </section> 

	<?php //	if (!empty($noticias_destacadas)): 
	?>
	<!--
	<div class="col-md-12">
		<div class="padding-top-middle"></div>
		<div class="business-title-middle" style="padding: 30px 0;">
			<h2>Noticias Institucionales</h2>
			<span class="title-border-middle"></span>
		</div>
	</div>
	<div class="business-cta-1x" style="padding: 30px 0;">
		<div class="container">
			<?php // echo $noticias ?>
			<a href="<?= base_url('Noticias/') ?>" style="display:none" class="bussiness-btn-larg">IR A NOTICIAS PROVINCIALES Y DE LA CABA </a>
			<div class="mt-2 boton-mas" style="text-align:right;margin-right:15px">
				<a href="<?= base_url('Noticias/Institucionales') ?>" class="bussiness-btn-larg">MÁS NOTICIAS INSTITUCIONALES</a>
			</div>
			<div class="padding-top-middle"></div>

		</div>
	</div>
	<?php // endif;
	?>
	<div class="col-md-12">
		<div class="padding-top-middle"></div>
		<div class="business-title-middle" style="padding: 30px 0;">
			<h2>Noticias de organismos integrantes</h2>
			<span class="title-border-middle"></span>
		</div>
	</div>
	<?php	//if (!empty($noticias_destacadas)): 
	?>
	<section id="noticias_global">
		<div class="business-cta-1x">
			<div class="container">
				<?php // echo $noticias_global ?>
				<div class="boton-mas" style="text-align:right;margin-right:15px">

					<a href="<?= base_url('Noticias') ?>" class="bussiness-btn-larg">MÁS NOTICIAS </a>
				</div>
				<div class="padding-top-middle"></div>

			</div>
		</div>
	</section>
-->
	<?php //endif;
	?>


	<!--ECA ESTA EL TITULO ULTIMOS PROYECTOS-->
	<?php //echo $post
	?>

	<div class="padding-top-middle"></div>

	<?php echo $faqs ?>

	<div class="business-cta-1x">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="cta-content">
						<h3>Te invitamos a interiorizarte sobre las leyes y proyectos y las actividades de las Legislaturas</h3>
						<a href="<?= base_url('Contacto') ?>" class="bussiness-btn-larg">Quiero saber más &raquo;</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="padding-top-large"></div>


	<script>
		var base_url = '<?= base_url() ?>';
		<?php
		//	echo '
		//	var markers = [{
		//		latLng: [-34.67507287396606, -58.48608696658111],
		//		'.$marker.'
		//	}];'
		//		;
		//	
		//	echo '
		//	var names = {
		//		'.$names.'  
		//	};
		//	';
		//	
		//	echo '
		//	var labels = {
		//		'.$labels.'
		//	};
		//	';
		//		
		//	echo '
		//	var colors_camaras = {
		//		'.$colors_camaras.'
		//	};
		//	';	
		//	
		//	echo '
		//	var colors_regions = {
		//		'.$colors_regions.'
		//	};
		//	';	
		?>
	</script>


	<?php
	if (!empty($notificacion_emergente)) {


		$segments = array('Prensa', url_title($notificacion_emergente[0]->titulo, 'underscore', TRUE), $notificacion_emergente[0]->id);

	?>
		<!--MODAL-->
		<!-- Modal -->
		<div class="modal fade" id="nodal_notificaciones" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<!--			<h3><?= $notificacion_emergente[0]->titulo ?></h3>-->
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<a target="_blank" href="<?= base_url($segments) ?>">
							<img src="<?= base_url($notificacion_emergente[0]->foto) ?>" alt="" style="width: 800px;">
						</a>
					</div>
					<!--
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
-->
				</div>
			</div>
		</div>

	<?php
	}

	?>