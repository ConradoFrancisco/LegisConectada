<style>
	
/*
	div.single-blog{
		background-color: #fff;
		font-size: 14px;
		min-height: 300px;
	}
*/

	div.blog-content a{
/*		font-size: 14px!important;*/
	}
	div.blog-content{
/*		padding: 2px 15px;*/
	}
	.business-cta-1x {
		height: auto!important;
	}
	.business-blog-1x{
		margin: 0 0 40px 0!important;
	}
	div.single-bolg figure{
/*		margin:0!important;*/
	}
	
/*
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
*/
	.blog-img img{
/*
		min-height: 145px;
		max-height: 145px;
*/
	}
	.blog-content{
/*
		min-height: 200px!important;
		max-height: 200px!important;
*/
/*		overflow: hidden;*/
	}
	.detalles{
		margin-top: 10px;
		line-height: 1.15;	
/*
		min-height: 140px!important;
		max-height: 140px!important;
*/
	}
	.blog-content a{
		line-height: 1.2;
/*		overflow: hidden;*/
	}
</style>
<?php
//var_dump($noticias_destacadas);die();

?>


<div class="business-blog-1x">
	<div class="container">
		<div class="row ">
			<?php 
				$i = 1;
				foreach($noticias_destacadas	 as $data){
			?>
				<div class="col-md-4 single-bolg hover01 d-flex" title="<?= $data->nombre_legis;?>">
	
					<div class="contenedor_noticia flex-fill">
					<div class="blog-img">
						<div class="blog-img-graph"><span><?= $data->nombre_pais.' - '.$data->provincia ?></span></div>
						<figure style="background: url(<?php echo base_url(); ?>/static/web/images/slider/banner_paginas.png) center;  height: 250px;display: flex;align-items: center;justify-content: center;">
							<img src="<?= base_url(). $data->foto ?>" class="img-responsive ig-thumbnail" style=" position: relative;margin: auto;top: 0;left: 0;right: 0;bottom: 0;">
						
						</figure>
						<div class="p-2">
						<?= '<span class=fechaNoticia>'.fecha_es($data->fecha_add) .' </span> <br>'. $data->nombre_legis?>

						</div>
					</div>
					<div class="blog-content p-2">
						<?php 
							$segments = array('Prensa',convert_accented_characters(url_title($data->titulo), 'underscore', TRUE),$data->id);
						?>
						<a href="<?= base_url($segments) ?>"><?php echo $data->titulo?></a>
						<div>
							<?php if(is_array($data->sounds) && !empty($data->sounds)):?>
								<i style="font-size:24px;color: #4a7ea2;" class="fa fa-soundcloud fa-3"></i><i>Notas de Audio</i>
							<?php endif;?>
						</div>
						<div class=" detalles p-2">
						<?php
							if(strip_tags($data->resumen)== ''){
							 echo strip_tags($data->cuerpo);
						}else{
							 echo strip_tags($data->resumen);
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
			<?php 
						//	if ($i++ == 3) break;
				}
			?>
		</div>
	</div>
</div>
	
<div class="padding-top-medium"></div>
