<?php

// if($noticias){
// 	echo "string";
// }else{
// 	echo 'capireo';
// }
// die;
?>
<style>
.single-bolg img {

	max-height: inherit !important; 
}
.blog-img-graph {
	position: absolute;
	top: 0;
	padding: 2px;
	background: rgba(0,0,0,0.42);
	width: 90.5%;
	text-align: right;
	box-shadow: azure;
	text-shadow: 2px 2px 1px 0px #f0f0f0;
	color: #ffffff;
	font-size: 12px;
}
.blog-content a {
	margin: 1px 0 5px 0 !important; 

}
.hover01{
	border: 1px solid #ccc;
}
.single-bolg{
	padding: 10px !important;
	margin: 10px 0 10px 0!important;
}

.blog-content a{
	font-size:16px!important;
}
.blog-content p{
	font-size:14px!important;
}
</style>




<div class="business-banner">
	<div class="hvrbox">
		<img src="<?= base_url('static/web/images/slider/banner_paginas.png')?>" alt="Legislaturas Conectadas" class="hvrbox-layer_bottom">
		<div class="hvrbox-layer_top">
			<div class="container">
				<div class="overlay-text text-center">
					<h3>
						Resultados	para : <br> <?= $cadena?>				</h3>

					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="padding-top-middle"></div>
	<div class="bussiness-about-company">
		<div class="business-title-middle">
			<h2>Noticias</h2>
			<span class="title-border-middle"></span>
		</div>

		<!--  -->

		<!--  -->
		<div class="container">
			<?php if(!$noticias):?>
				<div class="alert alert-info text-center " role="alert">
					No se han encotrado <strong>Noticias</strong> para el término de búsqueda
				</div>
			<?php endif;?>
			<div class="row">

				<?php foreach($noticias as $noticia):?>
				<div class="col-md-12 single-bolg hover01" title="<?= $noticia->titulo ?>">


					<div class=""><span><h4><?= $noticia->legislatura ?></h4></span></div>

					<div class="blog-content">
						<?php 
						$segments = array('Noticias',convert_accented_characters(url_title($noticia->titulo), 'underscore', TRUE ),$noticia->id);
						?>
						<a href="<?= base_url($segments) ?>" target="_blank"><?= $noticia->titulo ?> </a>
						<div class=" detalles"><?= $noticia->resumen ?></div>
					</div>
				</div>

			<?php endforeach;?>
		</div>
		<div class="business-title-middle">
			<h2>Normativas</h2>
			<span class="title-border-middle"></span>
		</div>
		<?php if(!$normativas):?>
			<div class="alert alert-info text-center " role="alert">
				No se han encotrado <strong>Normativas</strong> para el término de búsqueda
			</div>
		<?php endif;?>
		<div class="row">
			<?php foreach($normativas as $normativa):?>
				<div class="col-md-12 single-bolg hover01" title="<?= $noticia->titulo ?>">


					<div class=""><span><h4><?= $normativa->legislatura ?></h4></span></div>

					<div class="blog-content">
						<?php 
						$segments = array('Publicacion',convert_accented_characters(url_title($normativa->titulo), 'underscore', TRUE),$normativa->id);
						?>
						<a href="<?= base_url($segments) ?>" target="_blank"><?= $normativa->titulo ?> </a>
						<div class=" detalles"><?= $normativa->resumen ?></div>
					</div>
				</div>
			<?php endforeach;?>
		</div>
		<div class="business-title-middle">
			<h2>Legislaturas</h2>
			<span class="title-border-middle"></span>
		</div>
		<?php if(!$legislaturas):?>
			<div class="alert alert-info text-center " role="alert">
				No se han encotrado <strong>Legislaturas</strong> para el término de búsqueda
			</div>
		<?php endif;?>
		<div class="row">
			<?php foreach($legislaturas as $legislatura):?>
					<div class="col-md-12 single-bolg hover01" title="<?= $legislatura->nombre ?>">


					<!-- <div class=""><span><h4><?= $noticia->legislatura ?></h4></span></div> -->

					<div class="blog-content">
							<?php 
									$segments = array('Legislatura',$legislatura->id,convert_accented_characters(url_title($legislatura->nombre), 'underscore', TRUE));
								?>
						<a href="<?= base_url($segments) ?>" target="_blank"><?= $legislatura->nombre; ?></a>
					</div>
				</div>



			<?php endforeach;?>
		</div>
	</div>
</div>
<div class="padding-top-large"></div>
<?php
// echo 'PUBLICACIONES<pre>';
// var_dump($noticias);
// echo '</pre>';

?>

