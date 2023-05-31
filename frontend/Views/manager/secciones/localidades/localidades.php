<div class="row">
	
	<div class="col-md-4 ">
		<a href="<?= base_url('Manager/Localidades/agregar')?>">
			<div class="card card-hover">
				<div class="box  text-center" style="background-color: #00b19d;">
					<h1 class="font-light text-white"><i class="fas fa-pencil-alt"></i></h1>
					<h6 class="text-white">Agregar Localidad</h6>
				</div>
			</div>
		</a>
	</div>
</div>
<div class="row">
<div class="col-md-12" data-select2-id="15">
	<div class="card">
		<div class="card-body">
			<h4 class="card-title">Datos en tabla</h4>
			<div class="">
				<div id="zero_config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
					<table id="example" class="display" style="width:100%">
						<thead>
				 <label for="">Filtrar Países</label>
				 <select class="filtra_pais select2 form-control custom-select">
					 <option>Seleccione Pais</option>
					 <option value="">Todos</option>
					 <?php foreach($paises as $data):?>
					 
					 <option value="<?= $data->nombre ?>"><?= $data->nombre ?></option>
					 
					 <?php endforeach;?>
					 
					 </select>
							<tr>
								<th style="width:3%;">ID</th>
								<th>Nombre</th>
								<th>Provincia </th>
								<th>País</th>
								<th style="text-align: right;">Acciones</th>
							</tr>
						</thead>
	
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

<script>
var inicial = true;
</script>

