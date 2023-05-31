<?php
//echo '<pre>';
//var_dump($noticias);
//echo '</pre>';
?>
<style>
    /*30/04/2020
	CAT CAMBIO CSS DE MEDIDA DE BLOQUE DE NOTICIA
	*/
    div.detalles {
        max-height: 80px;
        overflow: hidden;
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
        box-shadow: azure;
        text-shadow: 2px 2px 1px 0px #f0f0f0;
        color: #ffffff;
        font-size: 12px;
    }

    .blog-content a {
        margin: 1px 0 5px 0 !important;
    }
</style>
<?php //die($region);?>
<div class="business-banner">
    <div class="hvrbox">
        <img src="<?= base_url('static/web/images/slider/banner_paginas.png')?>" alt="Mountains" class="hvrbox-layer_bottom">
        <div class="hvrbox-layer_top">
            <div class="container">
                <div class="overlay-text text-center">
                    <h3>
                        <?= $titulo_seccion ?>
                    </h3>
                    <?php
					if($region == "Argentina"){
						$region = "Nacionales";
					}elseif($region == "Internacional"){
						$region = "Internacionales";
					}else{
						$region = "";
						
					};
					?>
                    <h3 class="css_ambito">
                        <?= $region ?>
                    </h3>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="padding-top-middle"></div>
<div class="bussiness-about-company">
    <div class="container">

        <?php 
			$nombre_pais = '';
			
			foreach($noticias as $data_1){
//				echo $data_1->fecha_add ;
				if($data_1->nombre_pais != $nombre_pais){
					$label = '<div class="row"><div class="title-left"><h1 class="">'.$data_1->nombre_pais.'</h1></div></div>';
				}else{
					$label = '';
				}
				
				$nombre_pais = $data_1->nombre_pais;


	}
				 
//				 echo $label;
		?>

        <div class="row" id="lista_noticias">

            <?php if(count($noticias) > 0 ):?>
			
            <?php 
			//print_r($noticias);
			foreach($noticias as $data){?>

            <?php
			// quito la provincia cuando es publicacion de LC
			$localizacion =  $data->nombre_pais.' - '. $data->provincia;			
	
			if($data->is_legis_conectadas == 1 || $data->nombre_legis =='Legislaturas Conectadas'){
				$data->provincia = '<br>';
				$localizacion = '';
			}
 ?>

            <div class="col-md-4 single-bolg hover01" title="<?= $data->nombre_legis;?>">
                <div class="blog-img">
                    <figure style="background: url(<?php echo base_url(); ?>/static/web/images/slider/banner_paginas.png) center;  height: 250px;display: flex;align-items: center;justify-content: center;">
                        <img src="<?= base_url(). $data->foto ?>" class="img-responsive ig-thumbnail" style=" position: relative;margin: auto;top: 0;left: 0;right: 0;bottom: 0;">

                    </figure>
                    <div>
                        <?= '<span class=fechaNoticia>'.fecha_es($data->fecha_add) .' </span>  <br>'. $data->nombre_legis?>

                    </div>
                    <div class="blog-img-graph"><span><?= $localizacion ?></span></div>
                </div>
                <div class="blog-content">
                    <?php 
							$segments = array('Prensa',convert_accented_characters(url_title($data->titulo), 'underscore', TRUE),$data->id);
						?>
                    <a href="<?= base_url($segments) ?>"><?php echo $data->titulo?></a>
                    <div>
                        <?php if(is_array($data->sounds) && !empty($data->sounds)):?>
                        <i style="font-size:24px;color: #4a7ea2;" class="fa fa-soundcloud fa-3"></i><i>Notas de Audio</i>
                        <?php endif;?>
                    </div>
                    <div class=" detalles">
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
        <style>
            a:visited {
                color: #0f6ecd !important;

            }

            .activo {
                background-color: #007bff;
                color: #FFF;
            }
        </style>
        <div class="row">
            <div class="col-md-12">
                <div class="padding-top-middle"></div>
                <div class="blog-pagination">
                    <nav>
                        <?php echo $pagination ?>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<!--
<div class="padding-top-large"></div>
<div class="business-cta-2x">
    <div class="business-cta-2-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="business-cta-left-2">
                        <h2>Looking for an excelent business solution ?</h2>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="business-cta-right-2">
                        <a href="#" class=" btn bussiness-btn-larg">Get a Quote <i class="fa fa-angle-right"></i> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
-->
<div class="padding-top-large"></div>