		<?php
//echo '<pre>';
//var_dump($datos_paises);
//echo '</pre>';
//die();


/*

["id_legis"]=>
    string(2) "92"
    ["nombre_legis"]=>
    string(57) "Honorable Cámara de Senadores  Provincia de Buenos Aires"
    ["lema_legis"]=>
    string(0) ""
    ["logo_legis"]=>
    string(51) "/static/web/images/logos_/92_buenos_aires__cs_2.png"
    ["facebook_legis"]=>
    string(35) "https://www.facebook.com/SenadoBsAs"
    ["twitter_legis"]=>
    string(29) "https://twitter.com/Senado_BA"
    ["instagram_legis"]=>
    string(36) "https://www.instagram.com/senado.ba/"
    ["linkedin_legis"]=>
    NULL
    ["youtube_legis"]=>
    string(33) "https://youtube.com/user/SenadoBA"
    ["provincia"]=>
    string(19) "Buenos Aires       "
    ["zona"]=>
    string(4) "AR-B"
    ["provincia_color"]=>
    string(7) "#4d8ceb"
    ["camara"]=>
    string(1) "2"
    ["tipo_camara"]=>
    string(9) "Bicameral"
    ["color_camara"]=>
    string(7) "#7DBDEC"
    ["organismo"]=>
    string(20) "Cámara de Senadores"
    ["pais"]=>
    string(9) "Argentina"
		*/
?>

		<div class="bussiness-main-menu-1x">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="business-main-menu">
							<nav class="navbar navbar-expand-lg navbar-light bg-light btco-hover-menu">
								<a class="navbar-brand" href="<?= base_url()?>home">
									<img src="<?= base_url()?>static/web/images/logos/LC_logo.png" class="d-inline-block align-top" alt="">
								</a>
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
									<span class="navbar-toggler-icon"></span>
								</button>

								<div class="collapse navbar-collapse" id="navbarSupportedContent">

									<ul class="navbar-nav ml-auto business-nav">

										<li class="nav-item ">
											<a class="nav-link" href="<?= base_url()?>home">Inicio <span class="sr-only">(current)</span></a>
										</li>
										<li class="nav-item dropdown">
											<a class="nav-link" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												Argentina <i class="fa fa-angle-down"></i>
											</a>
											<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
												<li><a href="<?= base_url('Legislaturas/Argentina')?>" class="dropdown-item ">Legislaturas provinciales</a></li>
												<li><a href="<?= base_url('Concejos/Argentina')?>" class="dropdown-item ">Concejos Deliberantes 
</a></li>
												<li><a href="<?= base_url('Noticias/Argentina')?>" class="dropdown-item ">Noticias</a></li>
												<li><a href="<?= base_url('Publicaciones/1/Normativas/Argentina')?>" class="dropdown-item ">Normativas</a></li>

											</ul>
										</li>
										<li class="nav-item dropdown">
											<a class="nav-link" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												Países <i class="fa fa-angle-down"></i>
											</a>
											<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
												<li><a href="<?= base_url('Legislaturas/Internacional')?>" class="dropdown-item ">Legislaturas</a></li>
												<li><a href="<?= base_url('Concejos/Internacional')?>" class="dropdown-item ">Concejos Internacionales 

												<li><a href="<?= base_url('Noticias/Internacional')?>" class="dropdown-item ">Noticias</li></a>
												<li class=""><a href="<?= base_url('Publicaciones/1/Normativas/Internacional')?>" class="dropdown-item ">Normativas</a></li>



											</ul>
										</li>


										<li class="nav-item" style="display:none">
											<a class="nav-link" href="<?= base_url('Legislaturas/Argentina')?>">Legislaturas</a>
										</li>
										<li class="nav-item " style="display:none">
											<a class="nav-link" href="<?= base_url('Publicaciones/1/Normativas/Argentina')?>">Normativas</a>
										</li>


										<li class="nav-item dropdown">
											<a class="nav-link" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												Noticias <i class="fa fa-angle-down"></i>
											</a>
											<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
												<li><a href="<?= base_url('Noticias/Global')?>" class="dropdown-item ">Ver Todas</a></li>
												<!--<li><a href="<? //= base_url('Noticias/Institucionales')?>" class="dropdown-item ">Institucionales</a></li>-->
												<li><a href="<?= base_url('Noticias/Argentina')?>" class="dropdown-item ">Nacionales</a></li>
												<li><a href="<?= base_url('Noticias/Internacional')?>" class="dropdown-item ">Internacionales</a></li>

											</ul>
										</li>
										<li class="nav-item" style="display:none">
											<a class="nav-link" href="<?= base_url('Noticias')?>">Noticias</a>
										</li>
										<!--
									<li class="nav-item">
										<a class="nav-link" href="#">Breves en Imágenes</a>
									</li>
-->

										<li class="nav-item">
											<a class="nav-link" href="<?= base_url('Contacto')?>">Contacto</a>
										</li>
										<li class="nav-item dropdown">
											<a class="nav-link" href="#" id="navbarDropdownMenuLink22" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											Redes y Links<i class="fa fa-angle-down"></i>
											</a>
											<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink22">
												<li><a href="<?= base_url('Medios')?>" class="dropdown-item ">Red de medios</a></li>
												<li><a href="<?= base_url('Links')?>" class="dropdown-item ">Links de interés</a></li>

											</ul>
										</li>
									
									</ul>

									<div class="business-cart">
										<div class="box">
											<div class="container-2">
												<span class="icon"><i class="fa fa-search"></i></span>
												<form action="<?= base_url('Home/buscador_ajax')?>" id="form_search" method="POST" target="blank">
													<input type="search" id="search" name="search" data-base_url="<?= base_url();?>" placeholder="Buscar..." />
												</form>
											</div>
										</div>
									</div>

								</div>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>



		<!--		SEECION FILTRO DE PAISES, PROVINCIAS -->
		<!--
	<?php 
	$pais = '';
	
 	$provincia = '';
	if (isset($datos_paises)){						 
	foreach($datos_paises as $data):?>

		<?php 
			if($pais != $data->pais){
		?>
										<li><a class="dropdown-item dropdown-toggle"><?= $data->pais?></a>
											<ul class="dropdown-menu">
												<?php foreach($datos_paises as $data_1):?>
													<?php
														if($data->pais == $data_1->pais){
														if($provincia != $data_1->provincia){
															
													?>
														<li><a class="dropdown-item" href=""><?= $data_1->provincia ?></a></li>
													<?php
															}
															}
														$provincia = $data_1->provincia;
													?>
												<?php endforeach;?>
												
											</ul>
										</li>                                       
											
	<?php 
		}
		$pais = $data->pais;
	?>
									                                       
<?php endforeach;
	}
?>
-->