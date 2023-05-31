<?php
if(!$this->ion_auth->is_members() && ($this->user->id_legislatura == 1 && $this->user->id_legislatura == 91) || $this->ion_auth->is_admin() && ($this->user->id_legislatura == 1 || $this->user->id_legislatura == 91)|| $this->ion_auth->is_super()):
?>
<div class="">
	<div class="row">
		<div class="col-md-6">
			<div class="card">

				<form class="form-horizontal" id="form_alta_archivo" enctype="multipart/form-data">
					<div class="card-body">
						<h4 class="card-title">Información del archivo</h4>
						<div class="form-group row">
							<label class="col-md-3" for="disabledTextInput">Título</label>
							<div class="col-md-9">
								<input type="text" id="titulo" name="titulo" class="form-control" placeholder="" value="">
								<span id="titulo_error" class="text-danger"></span>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-3" for="disabledTextInput">Descripción</label>
							<div class="col-md-9">
								<textarea class="form-control" name="descripcion" id="descripcion"></textarea>
								<span id="descripcion_error" class="text-danger"></span>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-md-3">Archivo:</label>
							<div class="col-md-9">
								<div class="custom-file">
									<span id="userfile_pdf" class="custom-file-label " for="validatedCustomFile">Seleccione el Archivo</span>
									<input type="file" class="custom-file-input" name="userfile_file" id="">
									<span id="userfile_file" class="text-danger"></span>
								</div>
							</div>
						</div>
					</div>
					<div class="border-top">
						<div class="card-body">
							<button type="submit" id="enviar" class="btn btn-success">Emviar</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="col-md-6">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Tipos de archivos permitidos</h4>
					<div class="row">
						<div class="col-md-10"><strong>Microsoft Word </strong>(.doc, .docx)</div>
						<div class="col-md-10"><strong>Microsoft Excel </strong>(.xls, .xlsx)</div>
						<div class="col-md-10"><strong>Microsoft PowerPoint </strong>(.ppt, .pptx)</div>
						<div class="col-md-10"><strong>Archivos PDF </strong>(.pdf)</div>
						<div class="col-md-10"><strong>Archivos de imagen </strong>(.jpg, .jpeg, .gif, .png)</div>
						<div class="col-md-10"><strong>Archivos comprimidos </strong>(.zip, .rar)</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
<?php endif;?>
<!--	lsitado de tutoriales-->
<style>
	a {
		font-size: 16;
		color: #3e5569;
	}

	.titulo {
		font-weight: bold;
	}

	.borrar {
		color: red;
		display: none;
	}
</style>
<div class="card" id="tutos">
	<div class="card-body">
		<h4 class="card-title m-b-0">Recursos compartidos</h4>
	</div>
	<ul class="list-style-none" id="tutoriales_legis">
		<?= $recursos?>
	</ul>
</div>

<!--icono CONSULTAR - Centro de Ayuda - Ingresos Brutos - Retenciones Bancarias-->