<!-- <pre>

    <?php
    // var_dump($links[0]);
    ?>
</pre> -->
<div id="mapa"></div>
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
<?php

//$url = substr("http://www.example.com/elderly-care-advocacy/mental-capacity-act-advance-medical-directive.html", 7);
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$url = substr($actual_link, 7);
// split the URL in parts
$parts = explode("/", $url);

// The second part (offset 1) is the part we look for
$segment = '';


// sitio remo 38
//	$segment = $parts[2];


//sitio local y 10.1.1.77
//$segment = $parts[1];

switch ($_SERVER['SERVER_ADDR']) {
    case "127.0.0.1":
        if (count($parts) > 1) {
            $segment = $parts[1];
        } else {
            throw new Exception("Full URLs please!");
        }
        break;

    case "10.1.1.77":
        if (count($parts) > 1) {
            $segment = $parts[1];
        } else {
            throw new Exception("Full URLs please!");
        }
        break;

    case "10.1.1.38":
        if (count($parts) > 1) {
            $segment = $parts[2];
        } else {
            throw new Exception("Full URLs please!");
        }
        break;

    default:
        if (count($parts) > 1) {
            $segment = $parts[1];
        } else {
            throw new Exception("Full URLs please!");
        }
}

// //transformo en objeto array no stdsclass			 
$links2 = json_decode(json_encode($links), true);
$provincias2 = json_decode(json_encode($provincias), true);


$filterZona = '';
$filterTitleReload = '';
$urlLegis = '';
$filterColor = '';
if ($segment == 'Provincias') {

    // sitio remo 38
    // $filterZona = $parts[3];
    // $filterProv = $parts[4];	

    //sitio local y 10.1.1.77
    //$filterZona = $parts[2];
    //$filterProv = $parts[3];

    switch ($_SERVER['SERVER_ADDR']) {

        case "127.0.0.1":
            $filterZona = $parts[2];
            $filterProv = $parts[3];

            break;

        case "10.1.1.77":
            $filterZona = $parts[2];
            $filterProv = $parts[3];

            break;

        case "10.1.1.38":
            $filterZona = $parts[3];
            $filterProv = $parts[4];

            break;

        default:
            $filterZona = $parts[2];
            $filterProv = $parts[3];
    }



    if (!empty($filterZona)) {

        $offsetKey = 1; //<--- The offset you need to grab
        $filteredZone = search($provincias2, 'zona_provincia', $filterZona);
        /*
		echo '<pre>';
		print_r(search($legislaturas2, 'zona', $filterZona));
		echo '</pre>';		
		*/
        if (is_array($filteredZone)) {
            $n = array_keys($parts); //<---- Grab all the keys of your actual array and put in another array
            $count = array_search($offsetKey, $n); //<--- Returns the position of the offset from this array using search
            $new_arr = array_slice($parts, 0, $count + 1, true); //<--- Slice it with the 0 index as start and position+1 as the length parameter.
            $filterColor = $filteredZone[0]['color_provincia'];
            //$new_arr = array_push($new_arr,'Legislaturas');
            $urlLegis = implode("/", $new_arr);
            $urlLegis = $urlLegis . '/Legislaturas';
            $protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://";
            $filterTitleReload = '<div id="filterAlert" class="alert alert-info">Mostrando Organismos Parlamentarios de <strong>' . str_replace('-', ' ', $filteredZone[0]['nombre_provincia']) . ' </strong> <a id="clearFilter" class="btn btn-sm btn-warning pull-right" data-url="' . $protocol . $urlLegis . '" title="Limpiar Filtro y Mostrar Todas"><i class="fa fa-undo"></i></a></div>';
        }
        //saco provincias para reemplazar por Legislaturas



    }
    //defino la url para cuando no quiero m

}

//informacion de provincias para el mapa
$names = '';
$labels = '';
$colors_regions = '';
$colors_camaras = '';
$marker = "";
foreach ($provincias2 as $provincia) {

    //marker para caba
    if ($provincia["zona_provincia"] == "AR-C") {
        $marker = "
		name: '" . $provincia["nombre_provincia"] . "',
		labels: '" . $provincia["nombre_camara"] . "',
		code: '" . $provincia["zona_provincia"] . "',
		style: {fill: '" . $provincia["color_camara"] . "', r:15}
		";
    }

    // maker para Islas Malvinas
    if ($provincia["zona_provincia"] == "AR-I") {
        $marker_1 = "
		name: '" . $provincia["nombre_provincia"] . "',
		labels: '" . $provincia["nombre_camara"] . "',
		code: '" . $provincia["zona_provincia"] . "',
		style: {fill: '" . $provincia["color_camara"] . "', r:15}
		";
    }


    $names .= "'" . $provincia["zona_provincia"] . "': '" . $provincia["nombre_provincia"] . "',
	";

    $labels .= "'" . $provincia["zona_provincia"] . "': '" . $provincia["nombre_camara"] . "',	
	";

    $colors_regions .= "'" . $provincia["zona_provincia"] . "': '" . $provincia["color_provincia"] . "',
	";

    $colors_camaras .= "'" . $provincia["zona_provincia"] . "': '" . $provincia["color_camara"] . "',
	";
}

//var_dump($parts);			 
/*
echo '<pre>';
//print_r($parts);
print_r($new_arr);
echo '</pre>';
*/
function array_count($array, $key, $value = NULL)
{
    // count($array[*][$key])
    //$array = get_object_vars($array);
    //if (!is_array($array)) continue;
    $c = 0;
    if (is_null($value)) {
        foreach ($array as $i => $subarray) {
            $c += ($subarray[$key] != '');
        }
    } else {
        foreach ($array as $i => $subarray) {
            $c += ($subarray[$key] == $value);
        }
    }
    return $c;
}


function to_lower_and_without_tildes($str, $encoding = "UTF-8")
{
    $str = preg_replace('/&([^;])[^;]*;/', "$1", htmlentities(mb_strtolower($str, $encoding), null, $encoding));
    return $str;
}


function search($array, $key, $value)
{
    $results = array();

    if (is_array($array)) {
        if (isset($array[$key]) && $array[$key] == $value) {
            $results[] = $array;
        }

        foreach ($array as $subarray) {
            $results = array_merge($results, search($subarray, $key, $value));
        }
    }

    return $results;
}



function cleanString($string)
{
    // Tranformamos todo a minusculas	
    $string = mb_strtolower(trim($string), 'UTF-8');
    //die($url);
    //Rememplazamos caracteres especiales latinos	
    $find = array('á', 'é', 'í', 'ó', 'ú', 'ñ');
    $repl = array('a', 'e', 'i', 'o', 'u', 'n');
    $string = str_replace($find, $repl, $string);

    // Añadimos los guiones	
    $find = array(' ', '&', '\r\n', '\n', '+');
    $string = str_replace($find, '-', $string);

    // Eliminamos y Reemplazamos el resto de caracteres especiales	
    $find = array('/[^a-z0-9\-<>]/', '/[\-]+/', '/<[^>]*>/');
    $repl = array('', '-', '');

    $string = preg_replace($find, $repl, $string);

    return $string;
}

$total = count((array)$links);

//echo $total;			 
//get_object_vars($legislaturas);

?>


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

    /*
	div.map_container {
		height: 100%;
	}
*/

    .smart_map {
        width: 100%;
        height: 100%;
    }
</style>

<?php
if ($total > 0) {

?>
    <input type="hidden" id="filterto" value="<?php echo $filterZona ?>" />
    <input type="hidden" id="filtercolor" value="<?php echo $filterColor ?>" />
    <div class="padding-top-small"></div>
    <div class="bussiness-about-company">
        <div class="container">

            <div class="row">
                <div class="col-md-8">


                    <div class="col-md-12 listado">

                        <?php
                        //var_dump($tipos_camaras);
                        echo $filterTitleReload;
                        $prov = '';
                        $id_pais = '';
                        $border = '';
                        $borderDetail = '';
                        $a = 0;
                        $countOrg = 0; //contador para dentro de la misma legis
                        /*
					echo '<pre>';
			 		print_r($provincias);
			 		//echo '<hr>';
			 		//print_r(array_count_values($legislaturas['provincia']));
			 		echo '</pre>';
					*/
                        $headerOrganismo = '';
                        //echo array_count(json_decode($legislaturas,true),'provincia');
                        // echo array_search(91, array_keys($legislaturas, "id_legis"));

                        //// die();
                        // echo '<pre>';
                        // var_dump($legislaturas);
                        // echo '</pre>';die();

                        /*
			 ["capital_pais"]=>
    string(9) "Brasília"
    ["habitantes_pais"]=>
    string(9) "206135893"
    ["moneda_pais"]=>
    NULL
    ["idioma_pais"]=>
    NULL
    ["superficie_pais"]=>
    string(7) "8515770"
    ["lindantes_pais"]=>
    NULL
    ["codigo_pais"]=>
    string(4) "BRA "
			 
			 */
                        if (is_array($links) && !empty($links)) {
                        } else {
                            //				 die('vavcio');
                        }
                        foreach ($links as $link) {

                            if ($link->id_link != 10000) {   /// if para que no me muestr legislaturas conectadas como organismo de la Ciudad Autónoma de BSAS

                                $organismos =  array_count($links2, 'provincia', $link->provincia);

                                //echo $legislatura->provincia .' '.$organismos;
                                //if ($organismos == $a) echo 'Ya esta.<hr>';
                        ?>
                                <style>
                                    .bandera {
                                        background-size: contain;
                                        background-repeat: no-repeat;
                                    }


                                    .single-faq .card-header .accordion-toggle.collapsed:after {
                                        content: "\f05a" !important;
                                        font-size: 28px;
                                        color: darkgreen;
                                    }
                                </style>


                                <?php
                                $uro = base_url() . $link->bandera_pais;
                                $filterTitle = $link->provincia;
                                $filterPais = $link->id_pais;
                                //$banderaPais = base_url().$legislatura->bandera_pais;
                                if ($link->id_pais == $id_pais) {
                                    $html = '';
                                } else {
                                    $html = '<div class="col-md-1 "></div><div class="col-md-10 "></div><h1 class="">' . $link->nombre_pais . '<img  style="width:2"  src="/' . $link->bandera_pais . '" alt="insertar SVG con la etiqueta image"></h1><span class=""></span>	';

                                    //							$html = '<div class="row	" style="margin: 0 0 10px 0;"><div class="" style="
                                    //    padding-left: 0;
                                    //"><img  style=""  src="'.base_url().$legislatura->bandera_pais.'" alt="'.$legislatura->nombre_pais.'"></div><div class="col-sm-10 col-md-5"><h1>'.$legislatura->nombre_pais.'</h1></div></div>';
                                    //							varios html con distintos encabezados	
                                    $html = '
								<div class="row">
								<div class="col-md-12">
              <div class="card single-faq">
                                    <div class="card-header" role="tab" id="headingOne">
                                      
                                        <a class="accordion-toggle collapsed" data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="false" aria-controls="collapseOne">
                                          <div class="row">
																					<div class="bandera col-2 col-md-2"></div>
																					<div class="col-10 ">
																					<h1 style="margin-bottom: 0;">' . $link->nombre_pais . '</h1>
																					</div>
																					</div>								 
                                        </a>
                                     
                                    </div>

                                    <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" style="">
                                      <div class="card-body">
                                        Capital: ' . $link->capital_pais . '<br>Habitantes: </div> </div> </div> </div></div>';
                                ?>

                                <?php


                                    $html = '
								<div class="row">
								<div class="col-md-12">
              <div class="card single-faq">
                                    <div class="card-header" role="tab" id="headingOne">
                                      
                                       
                                          <div class="row">
																					<div class="bandera col-2 col-md-2" style="background-image: url( ' . base_url() . $link->bandera_pais . ');"></div>
																					<div class="col-10 ">
																					<h1 style="margin-bottom: 0;">' . $link->nombre_pais . '</h1>
																					</div>
																					</div>								 
                                        
                                     
                                    </div>

                                    <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" style="">
                                      <div class="card-body">
                                        Capital: ' . $link->nombre_localidad . '
                                      </div>
                                    </div>
                                  </div>
                </div>
								</div>';
                                }



                                if ($link->provincia == $prov) { //ya se guardo la enterior
                                    //nada
                                    $countOrg++;
                                    //if ($countOrg<$organismos) $borderDetail = '';
                                    if ($countOrg = $organismos) $borderDetail = 'add_border_detail';


                                    $headerOrganismo = '';
                                } else {

                                    $border = 'add_border'; //son distintas agrego linea separadora
                                    $borderDetail = '';
                                    if ($a == 0) { //es la primera no lleva marcador
                                        $border = 'add_border';
                                    }

                                    ++$a;

                                    $headerOrganismo = $html . '
							<div class="business-title-left">
							
								<h2 class= "' . $border . '">' .    $link->provincia    . '</h2><span class="title-border-left"></span>	</div>';
                                }
                                ?>
                                <div class="detalles_legis " data-filter2="<?php echo '$legislatura->zona'; ?>" data-filter="<?php echo cleanString(to_lower_and_without_tildes($filterTitle)); ?>">
                                    <div class="single-partner	">
                                        <?php
                                        echo $headerOrganismo;
                                        ?>
                                        <!--							/* TIPO MOVIL*/-->
                                        <?php
                                        $segments = array('Legislatura', $link->id_link, convert_accented_characters(url_title($link->nombre_localidad), 'underscore', TRUE));
                                        ?>
                                        <section class="mobil d-block d-sm-none  ">

                                            <div class="row">
                                                <div class="col-sm-12 media-body">
                                                    <?php if ($link->id_provincia != 3) : ?>

                                                        Localidad:<br><a href="<?= base_url($segments) ?>"><?= $link->nombre_localidad ?></a>
                                                    <?php endif; ?>
                                                </div>

                                                <div class="col-sm-12 mt-2">
                                                    <figure><a href="<?= base_url($segments) ?>"><img style="width:150px" class="img-fluid img-thumbnail" src="<?= base_url($link->link_imagen) ?>?ver=<?= time() ?>" alt="<?= $link->link_imagen ?>"> <?php //echo $countOrg; 
                                                                                                                                                                                                                                                        ?></a>
                                                    </figure>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <?= $link->detalle_link ?>                                                </div>
                                                <div class="col-12">
                                                    <a target="blank" href="<?= $link->url_link ?>"><?= $link->url_link ?></a>
                                                </div>


                                            </div>


                                        </section>
                                        <!--							/* FIN TIPO MOVIL*/-->

                                        <div class=" d-none d-sm-block media datos_legislatura <?php echo $borderDetail; ?> ">
                                            <div class="media-body">
                                                <?php if ($link->id_provincia != 3) : ?>
                                                    <a href="<?= base_url($segments) ?>"><?= $link->nombre_localidad ?></a>
                                                <?php endif; ?>

                                                <p>
                                                    <?= $link->titulo_link ?>
                                                    <?= @$legislatura->lema_legis ?>
                                                </p>

                                            </div>

                                            <div class="row " style="align-items: flex-end;">

                                                <div class="col-2 hover01">
                                                    <?php if ($link->link_imagen != null || $link->link_imagen != '') : ?>
                                                        <figure><a target="blank" href="<?= $link->url_link ?>"><img style="width:100px" class="img-fluid img-thumbnail" src="<?= base_url($link->link_imagen) ?>?ver=<?= time() ?>" alt="<?= $link->nombre_localidad ?>"> <?php //echo $countOrg; 
                                                                                                                                                                                                                                                                            ?></a>
                                                        </figure>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="col-10 align-text-bottom">
                                                    <p>
                                                        <?= $link->detalle_link ?>
                                                    </p>
                                                    <p>
                                                        <a target="blank" href="<?= $link->url_link ?>"><?= $link->url_link ?></a>
                                                    </p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                        <?php
                                $countOrg = 0;
                                $prov = $link->provincia;
                                $id_pais = $link->id_pais;
                            } // fin if si es legis conectadas id 91
                        } //fin loop legislaturas
                        ?>


                    </div>

                </div>
                <?php
                /* PREGUNTO SI PAIS ES ARGENTINA PARA OCULTAR EL MAPA*/
                //			die($legislatura->pais);


                if ($link->id_pais == 3) {

                    $invisible = '';
                }
                ?>
                <div class="col-md-4 text-center fixed">



                    <div class="d-none map_container <?= $invisible ?>">
                        <div id="map" class="smart_map" style=""></div>
                        <!--<div id="map_malvinas" class="smart_map" style="width:100%;height:100%"></div>-->

                    </div>
                    <!--
				<div class="row " style="margin-top: 30px " id="alert-map">
					<div class="alert alert-warning alert-dismissible fade show" role="alert">
						<strong>Holy guacamole!</strong> You should check in on some of those fields below.
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				</div>
-->
                    <!--					<img src="/static/web/images/argentina2.png" alt="" class="">-->
                </div>
            </div>
        </div>
    </div>

<?php

} else {
?>
    <div class="padding-top-large"></div>
    <div class="container">

        <div class="row  justify-content-md-center">
            <div>
                Ningún dato disponible en esta sección

            </div>
        </div>
    </div>

<?php

}

?>
<div class="padding-top-large"></div>




<script>
    <?php

    // MArker_1 es el de las Islas Malvinas
    //	echo '
    //	var markers = [{
    //		latLng: [-34.67507287396606, -58.48608696658111],
    //		'.$marker.'	
    //		},{latLng: [-52.339707374582574, -57.83394451360341],
    //		'.$marker_1.'
    //		}
    //	];'
    //		;

    echo '
	var names = {
		' . $names . '  
	};
	';

    echo '
	var labels = {
		' . $labels . '
	};
	';

    echo '
	var colors_camaras = {
		' . $colors_camaras . '
	};
	';

    echo '
	var colors_regions = {
		' . $colors_regions . '
	};
	';
    ?>
</script>