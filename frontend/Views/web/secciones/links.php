<?php

//var_dump($categorias);

 ?>
<style>
	.text-nowrap,
	.text-left {
		vertical-align: top;
		font-size: 16px;
		/*		cursor: pointer*/
	}

	}
</style>

<div class="business-banner">
	<div class="hvrbox">
		<img src="<?= base_url('static/web/images/slider/banner_paginas.png')?>" alt="Mountains" class="hvrbox-layer_bottom">
		<div class="hvrbox-layer_top">
			<div class="container">
				<div class="overlay-text text-center">
					<h3>
						<?= $titulo_seccion?>
					</h3>

				</div>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<style>
		.botones_filtro {
			margin: 5px;
		}
	</style>
	<div class="table-responsive  text-left">
		<div id="zero_config_wrapper" class="mt-3 dataTables_wrapper container-fluid dt-bootstrap4">
			<table id="table_links" class="display" style="width:100%">
			<?php if($categorias): ?>
			<div>
				
				<h2>Seleccione para filtrar contenidos</h2>

				<?php foreach($categorias as $data):?>


				<button data-categoria="<?= $data->nombre ?>" type="button" class="filter btn btn-primary botones_filtro"><?= $data->nombre ?></button>

				<?php endforeach;?>
			</div>
			<div>
				<button data-categoria="" type="button" class="filter btn btn-info botones_filtro">Quitar Filtro</button>
			</div>
			<?php endif;  ?>
				<!--
				
				 <select class="filtra_categoria select2 form-control custom-select">
					 <option>Seleccione Categoría</option>
					 <option value="">Todos</option>
					 <?php foreach($categorias as $data):?>
					 
					 <option value="<?= $data->nombre ?>"><?= $data->nombre ?></option>
					 
					 <?php endforeach;?>
					 
					 </select>
-->
				<thead>
				<style>
				
					th.sorting{
						content:'sasasa!important';
/*						display: none!important;*/
					}
				</style>
					<tr>
						<th>Título</th>
						<th>Detalle</th>
						<th>Url</th>
						<th>Categoría</th>
					</tr>
				</thead>
				<tbody></tbody>
			</table>
		</div>
	</div>
</div>
<div class="padding-top-large"></div>
<script>
	var base_url = '<?= base_url()?>';
</script>