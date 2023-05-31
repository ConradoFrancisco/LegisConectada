<table width="500" border="0" cellspacing="5" align="center">
	<tr>
		<td colspan="3" height="50"><img width="690" src="<?= base_url('static/manager/breves/pdf/copete.png');?>" alt="Legislaturas Conectadas"></td>
	</tr>
	<tr>
		<td colspan="3" align="left" height="10" style="padding:10px 0;font-size:12px; text-align:left;"><?php echo  $this->fecha ?></td>
	</tr>
		<tr>
		<td colspan="3" align="left" height="10" style="font-size:20px;"><h2 style="padding: 0 10px 0 0;"><?php echo  $titulo ?></h2></td>
	</tr>
	
	<?php 
	//   echo '<pre>';
	//   var_dump($publicaciones);
	//   echo '</pre>';
	// 	die();

	$pais = '';
	$prov = '';
  foreach($publicaciones as $data){

	if($data->provincia == $prov){
		$prov = '';
	}else{
		$prov = $data->provincia;
	}	
	
	if($data->nombre_pais == $pais){
		$pais = '';
	}else{
		$pais = $data->nombre_pais;
	}


  ?>
  <style>
	  .nombre-pais{
		  font-size: 1.4em!important;
		  font-weight: bold;
		  /* color:#1e87f0; */
		}	  
		.nombre-prov{
			font-weight: bold;
			font-size: 1.2em!important;
		}
		strong.titulo{
			color:#1e87f0;
			font-size: 1.3em!important;
		}
		.link{
			color:#1e87f0;
		}
  </style>
<tr><td colspan="2" style="text-align: left;"><span style="font-size: 1.4em!important; font-weight: bold;" class="nombre-pais"><?= $pais ?></span><br><span style="font-weight: bold;font-size: 1.2em!important;" class="nombre-prov"><?= $prov ?></span></td></tr>
	<tr>
		<td width="138" rowspan="1" valign="top" align="center">
		<img style="padding:5px;border-style: solid;border-width: 2px 2px 2px 2px;border-color: #599bb354;" src="<?= base_url($data->imagen)?>" width="200" height="154" alt="Legislaturas Conectadas" />
	</td>

		<td width="337" height="10" colspan="2" valign="top" style="padding: 0 10px"><strong style="color:#1e87f0;" class="titulo"><?= $data->titulo ?></strong><br><?= word_limiter($data->cuerpo, 40)?>
		
		
			<?php
				if($data->id_tipo == 1){
					$segments = array('Prensa',convert_accented_characters(url_title($data->titulo), 'underscore', TRUE),$data->fk_idpost);
				}else{
					$segments = array('Prensa',convert_accented_characters(url_title($data->titulo), 'underscore', TRUE),$data->fk_idpost);
				}
				?>
			<p><a class="link" href="	<?= base_url($segments)?>">Leer más</a></p>
		
		</td>
	</tr>
	<tr>
	
		<td colspan="3">
			<hr>
		</td>
	</tr>
	<?php
	$pais = $data->nombre_pais;
	$prov = $data->provincia;
  };
  ?>
	<tr>
		<td colspan="3" ><img width="690" src="<?= base_url('static/manager/breves/pdf/pie.png')?>" alt="Legislaturas Conectadas"></td>
	</tr>
	
	<tr>
		<td colspan="3" align="center">
		<a style="font-size: 25px;" href="http://www.legislaturasconectadas.gob.ar/">www.legislaturasconectadas.gob.ar</a>
		</td>
	</tr>	
	<tr>
		<td colspan="3" align="center">
		<a style="
		text-align:center;
			background-color:#599bb3;
			display:inline-block;
			cursor:pointer;
			color:#ffffff;
			font-family:Arial;
			font-size:17px;
			padding:10px 10px;
			text-decoration:none;
			text-shadow:0px 0px 0px #3d768a;" 
	href="<?= base_url($adjunto)?>">Descargar versión PDF </a>
	</td>
	</tr>
	<tr>
		<td></td>
	</tr>
	<tr >
		<td colspan="3" align="center">Por favor, NO responda a este mensaje, es un envío automático.</td>
	</tr>
</table>
