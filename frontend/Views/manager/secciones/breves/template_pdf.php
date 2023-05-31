<table width="500" border="0" cellspacing="10" align="center"cellspadding="5" >
<tr>
		<td colspan="3" height="50"><img width="690" src="<?php echo base_url('static/manager/breves/pdf/copete.png');?>" alt="Legislaturas Conectadas"></td>
	</tr>
	<tr>
		<td colspan="3" align="left" height="10" style="padding:10px 0;font-size:12px; text-align:right;"><?php echo  $this->fecha ?></td>
	</tr>
		<tr>
		<td colspan="3" align="center" height="10" style="text-align:center;font-size:20px;"><h2 style="padding: 0 10px 0 0;"><?php echo  $titulo ?></h2></td>
	</tr>		
	<tr>
		<td colspan="3" align="center" height="10" style="text-align:center;"><h2 style="padding: 0 10px 0 0;font-size:20px!important;"><?php echo  $subtitulo ?></h2></td>
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

	if($data->id_legis == 91){
		$pais = '';
		$prov ='';
	}




  ?>
  <style>
	  .nombre-pais{
		  padding: 10px 0;
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
<tr>
	<td colspan="2" style="text-align: left; margin: 20px 0;"><strong><span class="nombre-pais"><?= $pais ?></span></strong></td>
</tr>
<tr>
	<td colspan="2" style="text-align: left; margin: 20px 0;"><strong><span class="nombre-prov" style="margin: 20px 0;"><?= $prov ?></span></strong></td>
</tr>
<tr>
	<td colspan="2" style="text-align: left; margin: 40px 0;"><strong><span class="nombre-prov" style=""><?= $data->nombre_legis ?></span></strong></td>
</tr>
<tr>
	<td colspan="2"  style="text-align: left; margin: 40px 0;"></td>
</tr><tr>
	<td colspan="2"  style="text-align: left; margin: 40px 0;"></td>
</tr>
	<tr>
		<td width="138" rowspan="1" valign="top" align="center">
		<img style="padding:5px;border-style: solid;border-width: 2px 2px 2px 2px;border-color: #599bb354;" src="<?php echo base_url($data->imagen); ?>" width="200" height="154" alt="Legislaturas Conectadas" />
	</td>

		<td width="337" height="10" colspan="2" valign="top" style="padding: 0 10px"><strong class="titulo"><?= $data->titulo ?></strong><br><?= $data->resumen?>
		
		
			<?php
				if($data->id_tipo == 1){
					$segments = array('Prensa',convert_accented_characters(url_title($data->titulo), 'underscore', TRUE),$data->fk_idpost);
				}else{
					$segments = array('Prensa',convert_accented_characters(url_title($data->titulo), 'underscore', TRUE),$data->fk_idpost);
				}
				?>
			<p><a target="_blank" class="link" href="<?= base_url($segments)?>">Leer más</a></p>
		
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
		<a target="_blank" style="font-size: 25px;" href="http://www.legislaturasconectadas.gob.ar/">www.legislaturasconectadas.gob.ar</a>
		</td>
	</tr>	
	<tr>
		<td colspan="5" align="center">
		<a  target="_blank" style="	/*background-color:#599bb3;*/cursor:pointer;color:#599bb3;font-family:Arial;font-size:17px;padding:15px ;text-decoration:none;" 
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
