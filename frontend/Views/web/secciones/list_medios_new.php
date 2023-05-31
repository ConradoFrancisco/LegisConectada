<!-- <pre>

    <?php
        // var_dump($links);
    ?>
</pre> -->

<style>
    .business-title-left {
        padding-bottom: 0px;
        text-align: left;
    }

    .add_border {
        border-top: 2px solid #7f8386 !important;
        padding-top: 15px;
    }

    .add_border_detail {
        border-top: 1px dotted #e6e4e4 !important;
        padding-top: 25px;
        padding-bottom: 15px;
    }

    .clear_border {
        border-top: 0px solid #eee !important;
    }

    div.datos_legislatura {
        margin-left: 40px;
    }

    div.medios img{
        max-width: 200px;
        min-width: 200px;
    }
    /*
	div.map_container {
		height: 100%;
	}
*/

    .smart_map {
        width: 100%;
        height: 100%;
    }
    r.titulo{
        font-size: 1.5em!important;
        font-weight: bold!important;
        color:#222222!important;
    }
     x.tipo{
        font-weight: bold;
    }
    div.medios p{
        margin: 0!important;
    }
</style>
<div class="business-banner">
    <div class="hvrbox">
        <img src="<?= base_url('static/web/images/slider/banner_paginas.png') ?>" alt="Legislaturas Conectadas" class="hvrbox-layer_bottom">
        <div class="hvrbox-layer_top">
            <div class="container">
                <div class="overlay-text text-center">
                    <h3>
                        <?= $titulo_seccion ?>
                    </h3>
                    <h3 class="css_ambito">
                        <?= $region ?>
                    </h3>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="mt-2 container medios">

<div class="row">

    
<?php


 foreach ($links as $link) { ?>

<div class="col-sm-12 col-md-6  align-items-start">

<div class="mt-2 mb-2 col-12 nombre_medio"><x class="tipo"><?= $link->nombre_cate?></x> <r class="titulo"><?= $link->titulo_link ?></r> </div>
    <div class="col-12 hover01">
        <?php if ($link->link_imagen != null || $link->link_imagen != '') : ?>
            <figure><a target="blank" href="<?= $link->url_link ?>"><img class="img-fluid img-thumbnail" src="<?= base_url($link->link_imagen) ?>?ver=<?= time() ?>" > <?php //echo $countOrg; 
                                                                                                                                                                                                            ?></a>
            </figure>
        <?php endif; ?>
    </div>
    <div class="col-10 align-text-bottom">
            <p>
                <?= $link->detalle_link ?>
            </p>
            <div class="my-3">
                <a target="blank" href="<?= $link->url_link ?>"><?= $link->url_link ?></a>
        </div>
        </div>
    <div class="col-12">
        <ul class="top-nav-social">
            <?php if ($link->facebook != '') : ?>
                <li><a href="<?= $link->facebook ?>" class="facebook" target="_blank"> <i class="fa fa-facebook"></i> </a>
                </li>
            <?php endif; ?>
            <?php if ($link->twitter != '') : ?>
                <li><a href="<?= $link->twitter ?>" class="twitter" target="_blank"> <i class="fa fa-twitter"></i> </a>
                </li>
            <?php endif; ?>
            <?php if ($link->instagram != '') : ?>
                <li><a href="<?= $link->instagram ?>" class="instagram" target="_blank"> <i class="fa fa-instagram"></i> </a>
                </li>
            <?php endif; ?>

            <?php if ($link->youtube != '') : ?>
                <li><a href="<?= $link->youtube ?>" class="youtube" target="_blank"> <i class="fa fa-youtube"></i> </a>
                </li>
            <?php endif; ?>

        </ul>
    </div>
 


    
    <hr>
      
</div>  
    <?php
 }
 ?>
 </div>

</div>