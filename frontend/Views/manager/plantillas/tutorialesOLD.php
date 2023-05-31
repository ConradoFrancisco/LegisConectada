<style>

	a{
		font-size: 16;
		color: #3e5569;
	}
	.titulo{
		font-weight: bold;
	}
	.borrar{
		color: red;
		display: none;
	}
</style>
<?php if($tutoriales):?>
		

		<?php foreach($tutoriales as $data):?>

		<?php ($data->video == 1) ? $png = "youtube.png" : $png ="pdf.png"; ?>
			<a href="<?= base_url('Manager/Tutoriales/visor/'.$data->video.'/'.$data->url) ?>" class="m-b-0 p-0" id="tutorial_<?= $data->id ?>">
			<li class="card-body  border-top">
				<div class="row">
					<div class="col-md-1">
					<img src="<?= base_url('static/manager/tutoriales/iconos/'.$png)?>" alt="" class="img-responsive">
					</div>
					<div class="col-md-5 titulo">
						<?= $data->titulo ?> 
					</div>
					<div class="col-md-5">
						<?= $data->descripcion ?>
					
					</div>
					
					<div class="col-md-1">
					<?php
						if(!$this->ion_auth->is_members() && ($this->user->id_legislatura == 1 && $this->user->id_legislatura == 91) || $this->ion_auth->is_admin() && ($this->user->id_legislatura == 1 || $this->user->id_legislatura == 91)|| $this->ion_auth->is_super()):
						?>
						<i data-id="<?= $data->id?>" data-video="<?= $data->video?>" class="fas fa-trash-alt borrar" title="Borrar"></i>
						<?php endif;?>
					</div>
				</div>
		</li>
		</a>
	<?php endforeach;?>
<?php endif;?>