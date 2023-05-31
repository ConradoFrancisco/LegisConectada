<style>
	.textarea {
		margin: 10px 0;
	}
</style>
<div id="Modal_noticias" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-body">
				<div class="card">
					<div class="card-body">
						<?php 	echo $this->config->item('mi_variable');?>
						<div class="table-responsive">
							<div id="zero_config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
								<table id="listados_post" class="display" style="width:100%">
									<thead>
										<tr>
											<th>ID</th>
											<th>Titulo</th>
											<th>Región</th>
											<th>Acciones</th>
											<th>Acciones</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
											<th>ID</th>
											<th>Titulo</th>
											<th>Región</th>
											<th>Acciones</th>
											<th>Acciones</th>
										</tr>
									</tfoot>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>.
		</div>
	</div>
</div>
<div class="card">
	<div class="card-body">
<!--		<h4 class="card-title">banners</h4>-->
	</div>
	<div class="comment-widgets scrollable ps-container ps-theme-default" data-ps-id="d6532bcd-c2ba-2c42-6513-33a62c4bf468">
		<!-- Comment Row -->
		<?php foreach($banners as $data): ?>
		<div class="d-flex flex-row comment-row mt-0">

			<div class="comment-text w-100">

				<div>
					<img class="img-fluid  border-primary" alt="Responsive image" src="http://<?= $data->url_banner;?>" alt="">
				</div>
				<div class="row">
					<div class="col-md-6">

					<div class="card mt-2">
						<!-- Nav tabs -->
						<ul class="nav nav-tabs" role="tablist">
							<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home_<?= 	$data->id_banner?>" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down">Link a Secciones</span></a> </li>
							<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile_<?= 	$data->id_banner?>" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down">Link a Contenido</span></a> </li>

						</ul>
						<!-- Tab panes -->
						<div class="tab-content tabcontent-border">
							<div class="tab-pane active" id="home_<?= 	$data->id_banner?>" role="tabpanel">
								<div class="p-20">
									<div class="">
										<label>Seleccione destino del link de la imagen</label>
									</div>
									<select data-url_imagen="<?= $data->url_banner;?>" data-id_banner="<?= $data->id_banner ?>" class="select2 select2-container" name="banners" id="contenido_<?= $data->id_banner ?>" >
										<option value="">Seleccione página de destino</option>
										<option value="Link-Home">Home del sitio</option>
										<option value="Link-Noticias/Argentina">Noticias Nacionales</option>
										<option value="Link-Noticias/Internacional">Noticias Internacionales</option>
									</select>
								</div>
							</div>
							<div class="tab-pane  p-20" id="profile_<?= 	$data->id_banner?>" role="tabpanel">
									<div class="">
										<label>Seleccione contenido del link de la imagen</label>
									</div>
								<button type="button" class="noticias-btn btn btn-primary" data-toggle="" data-target="#exampleModal" data-url_imagen="<?= $data->url_banner?>"data-id_banner="<?= $data->id_banner?>" data-contenido="noticias" data-region="Argentina">
									Noticas Nacionales
								</button>
								 <button data-url_imagen="<?= $data->url_banner?>"data-id_banner="<?= $data->id_banner?>" type="button" class="noticias-btn btn btn-primary" data-toggle="" data-target="#exampleModal" data-contenido="noticias" data-region="Internacional">
									Noticas Internacionales
								</button>
							</div>

						</div>
					</div>

				<div class="comment-footer pt-2">
<!--					<button id="genera_<?= $data->id_banner?>"  disabled type="button" class="btn btn-cyan btn-sm text-white">Generar Código</button>-->
					<button data-id="<?= $data->id_banner?>" id="copia_<?= $data->id_banner?>"  disabled type="button" class="copiar_html btn btn-success btn-sm text-white">Copiar Código</button>
					<button id="borra_<?= $data->id_banner?>" data-id_banner="<?= $data->id_banner?>"  disabled type="button" class="borrar_code btn btn-danger btn-sm text-white"><i class="fa fa-trash" aria-hidden="true"></i></button>
				</div>
						
					</div>
					<div class="col-md-6">
						
					<textarea class="textarea" readonly name="" id="codigo_<?= $data->id_banner?>" cols="55" rows="5"></textarea>
					</div>
				</div>
			</div>
		</div>

		<?php endforeach; ?>
		<div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;">
			<div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
		</div>
		<div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px;">
			<div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div>
		</div>
	</div>
</div>
<!--
<div class="card invisible">
	<div class="card-body">
		<div class="d-md-flex align-items-center">
			<div>
				<h5 class="card-subtitle">Copiar el código para compartir</h5>
			</div>
		</div>
		<div class="row mb-3" style="float: left;">
			<div class="col-md-12">
				<img class="img-fluid  border-primary" alt="Responsive image" src="<?= base_url('static/web/images/banners/120x138.png');?>" alt="">
			</div>
			<div class="col-md-12">
				<div>

					<textarea class="textare" readonly name="" id="codigo_1" cols="55" rows="5">&lt;a	target="_blank" href="http://www.legislaturasconectadas.gob.ar/" &gt;&lt;img src="http://www.legislaturasconectadas.gob.ar/static/web/images/banners/243x60.png" alt="Legislaturas Conectadas" >&lt;/a&gt;</textarea>
				</div>
				<div>
					<button data-id="codigo_1" type="button" class="copiar_html btn btn-rpimary btn-sm">Geberar código</button>
					<button data-id="codigo_1" type="button" class="copiar_html btn btn-success btn-sm">Copiar código</button>
				</div>
			</div>
		</div>

		<div class="row mb-3" style="float: left;">
			<div class="col-md-12">
				<img class="img-fluid  border-primary" alt="Responsive image" src="http://www.legislaturasconectadas.gob.ar/static/web/images/banners/243x60.png" alt="">
			</div>
			<div class="col-md-12 ">
				<div>

					<textarea class="textare" readonly name="" id="codigo_2" cols="55" rows="5">&lt;a	target="_blank" href="http://www.legislaturasconectadas.gob.ar/" &gt;&lt;img src="http://www.legislaturasconectadas.gob.ar/static/web/images/banners/243x60.png" alt="Legislaturas Conectadas" >&lt;/a&gt;</textarea>
				</div>
				<div>
					<button data-id="codigo_2" type="button" class="copiar_html btn btn-success btn-sm">Copiar código</button>
				</div>
			</div>
		</div>


		<div class="row mb-3" style="float: left;">
			<div class="col-md-12">
				<img class="img-fluid  border-primary" alt="Responsive image" src="<?= base_url('static/web/images/banners/468x60.png');?>" alt="">
			</div>
			<div class="col-md-12 ">
				<div>

					<textarea class="textare" readonly name="" id="codigo_3" cols="55" rows="5">&lt;a	target="_blank" href="http://www.legislaturasconectadas.gob.ar/" &gt;&lt;img src="http://www.legislaturasconectadas.gob.ar/static/web/images/banners/468x60.png" alt="Legislaturas Conectadas" >&lt;/a&gt;</textarea>
				</div>
				<div>
					<button data-id="codigo_3" type="button" class="copiar_html btn btn-success btn-sm">Copiar código</button>
				</div>
			</div>
		</div>



		<div class="row mb-3" style="float: left;">
			<div class="col-md-12">
				<img class="img-fluid  border-primary" alt="Responsive image" src="http://www.legislaturasconectadas.gob.ar/static/web/images/banners/468x100_1.png" alt="">
			</div>
			<div class="col-md-12 ">
				<div>

					<textarea class="textare" readonly name="" id="codigo_4" cols="55" rows="5">&lt;a	target="_blank" href="http://www.legislaturasconectadas.gob.ar/" &gt;&lt;img src="http://www.legislaturasconectadas.gob.ar/static/web/images/banners/468x100_1.png" alt="Legislaturas Conectadas" >&lt;/a&gt;</textarea>
				</div>
				<div>
					<button data-id="codigo_4" type="button" class="copiar_html btn btn-success btn-sm">Copiar código</button>
				</div>
			</div>
		</div>


		<div class="row mb-3" style="float: left;">
			<div class="col-md-12">
				<img class="img-fluid  border-primary" alt="Responsive image" src="<?= base_url('static/web/images/banners/468x100_2.png');?>" alt="">
			</div>
			<div class="col-md-12 ">
				<div>

					<textarea class="textare" readonly name="" id="codigo_5" cols="55" rows="5">&lt;a	target="_blank" href="http://www.legislaturasconectadas.gob.ar/" &gt;&lt;img src="http://www.legislaturasconectadas.gob.ar/static/web/images/banners/468x100_2.png" alt="Legislaturas Conectadas" >&lt;/a&gt;</textarea>
				</div>
				<div>
					<button data-id="codigo_5" type="button" class="copiar_html btn btn-success btn-sm">Copiar código</button>
				</div>
			</div>
		</div>

		<div class="row mb-3 " style="float: left;">
			<div class="col-md-12">
				<img class="img-fluid  border-primary" alt="Responsive image" src="http://www.legislaturasconectadas.gob.ar/static/web/images/banners/900x158.png" alt="">
			</div>
			<div class="col-md-12 ">
				<div>

					<textarea class="textare" readonly name="" id="codigo_6" cols="55" rows="5">&lt;a	target="_blank" href="http://www.legislaturasconectadas.gob.ar/" &gt;&lt;img src="http://www.legislaturasconectadas.gob.ar/static/web/images/banners/900x158.png" alt="Legislaturas Conectadas" >&lt;/a&gt;</textarea>
				</div>
				<div>
					<button data-id="codigo_6" type="button" class="copiar_html btn btn-success btn-sm">Copiar código</button>
				</div>
			</div>
		</div>


	</div>
</div>-->
