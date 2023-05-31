
<?php

if($recursos):?>
		

		<?php foreach($recursos as $data):?>
		
<?php
$tipo = explode('.',$data->url);



switch ($tipo[1]) {
	case 'jpg':
	case 'png':
	case 'gif':
	case 'jpeg':
		$icono = 'image.png';
		break;
	case 'pdf':
		$icono = 'pdf.png';
		break;
	case 'doc':
	case 'docx':
		$icono = 'doc.png';
		break; 
	case 'xls':
	case 'xlsx':
		$icono = 'xls.png';
		break;    
	case 'ppt':
	case 'pptx':
		$icono = 'ppt.png';
		break;
	case 'zip':
	case 'rar':
		$icono = 'zip.png';
		break;
	default:	
		$icono = 'doc.png';
}

?>

			<li class="card-body  border-top" id="recurso_<?= $data->id ?>">
				<div class="row">
					<div class="col-md-1">
			<a download="<?= $data->url ?>"href="<?= base_url('static/manager/recursos_compartidos/'.$data->url) ?>" class="m-b-0 p-0" >
					<img src="<?= base_url('static/manager/recursos_compartidos/iconos/'.$icono)?>" alt="" class="img-responsive">
		</a>
					</div>
					
					<div class="col-md-3">
			<a download="<?= $data->url ?>"href="<?= base_url('static/manager/recursos_compartidos/'.$data->url) ?>" class="m-b-0 p-0" >
					<strong>	<?= $data->titulo ?></strong>
						</a> 
					</div>			
					<div class="col-md-3">
						<?= $data->url ?>
					</div>
					<div class="col-md-3">
			<a download="<?= $data->url ?>"href="<?= base_url('static/manager/recursos_compartidos/'.$data->url) ?>" class="m-b-0 p-0" >
						<?= $data->descripcion ?>
						</a>
							</div>
				
					
				
						<div class="col-md-1">
					<a style="color: white;" href="#" data-url="<?= $data->url?>" data-id="<?= $data->id ?>" data-video="<?= $data->video ?>"  class="borrar_tutorial btn btn-danger btn-xs"><i class="fas fa-trash-alt" title="Borrar"></i> </a>
							
						</div>						
						
					<?php
						$contador = '';
						if($this->ion_auth->is_super()):
							$contador = $this->Recursos_model->contar_click($data->id);
					?>
						<div class="col-md-1"><a style="color: white;" href="#" data-url="<?= $data->url?>"   class=" btn btn-primary btn-xs">Clicks: <?= $contador ?></a></div>
						<?php endif;?>

				</div>
		</li>
	<?php endforeach;?>
<?php endif;?>