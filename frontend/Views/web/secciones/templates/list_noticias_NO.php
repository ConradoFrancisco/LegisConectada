<style>
	
	div.single-blog{
		background-color: #fff;
		font-size: 14px;
		min-height: 300px;
	}

	div.blog-content a{
		font-size: 14px!important;
	}
	div.blog-content{
		padding: 2px 15px;
	}
	.business-cta-1x {
		height: auto!important;
	}
	.business-blog-1x{
		margin: 0 0 40px 0!important;
	}
	div.single-bolg figure{
		margin:0!important;
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
	.blog-img img{
		min-height: 145px;
		max-height: 145px;
	}
	.item_noticia{
		min-height: 450px!important;
		max-height: 450px!important;
		overflow: hidden;
	}
	.detalles{
		line-height: 1.15;	
	}
	.blog-content a{
		line-height: 1.2;
		min-height: 450px!important;
		max-height: 450px!important;
		overflow: hidden;
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
			<div class="col-md-3 item_noticia ">
				<div class="single-blog hover01 text-left">
					<div class="blog-img">
					<figure><img src="<?= base_url().$data->foto ?>" alt="<?= $data->titulo?>" class=""></figure>
					<div class="blog-img-graph"><span><?= $data->nombre_legis?></span></div>
					</div>
					<div class="blog-content">
<?php if($legis_conectadas):?>
	<?= '<span class=fechaNoticia>'.fecha_es($data->fecha_add).'</span>';?>
					<?php else:?>
	<?= '<span class=fechaNoticia>'.fecha_es($data->fecha_add).'</span>'.$data->nombre_pais.'<br>  '.$data->provincia?>
					<?php endif?>
						<?php 
							$segments = array('Noticias',url_title($data->titulo, 'underscore', TRUE),$data->id);

						?>
						
						<a href="<?= base_url($segments)?>">
							<?= $data->titulo ?></a>
						<div class=" detalles ">
							<?= word_limiter(strip_tags($data->resumen), 30); ?>
							<!--
						<div><i class="fa fa-building"></i><?= $data->nombre_legis?></div>
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
