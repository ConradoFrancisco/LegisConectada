
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

<!-- 
<table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%" style="-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;border-spacing: 0 !important;border-collapse: collapse !important;table-layout: fixed !important;margin: 0 auto !important;">
    <tr style="-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
        <td class="logo" style="text-align: center;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;"><a href="{{WEB_ROOT}}" style="-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;text-decoration: none;color: #feb062;"><img src="<?= base_url($data->imagen)?>" style="max-width: 300px;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;-ms-interpolation-mode: bicubic;"></a></td>
    </tr>
</table> -->





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:v="urn:schemas-microsoft-com:vml">
	<head>
		<!--[if gte mso 9]><xml><o:OfficeDocumentSettings><o:AllowPNG/><o:PixelsPerInch>96</o:PixelsPerInch></o:OfficeDocumentSettings></xml><![endif]-->
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
		<meta content="width=device-width" name="viewport"/>
		<!--[if !mso]><!-->
		<meta content="IE=edge" http-equiv="X-UA-Compatible"/>
		<!--<![endif]-->
<title></title>
<!--[if !mso]><!-->
<!--<![endif]-->
<style type="text/css">
	body {
		margin: 0;
		padding: 0;
	}
	
	table,
	td,
	tr {
		vertical-align: top;
		border-collapse: collapse;
	}
	
	* {
		line-height: inherit;
	}
	
	a[x-apple-data-detectors=true] {
		color: inherit !important;
		text-decoration: none !important;
		}
		</style>
<style id="media-query" type="text/css">
		@media (max-width: 620px) {
			
			.block-grid,
			.col {
				min-width: 320px !important;
				max-width: 100% !important;
				display: block !important;
			}
			
			.block-grid {
				width: 100% !important;
			}
			
			.col {
				width: 100% !important;
			}
			
			.col_cont {
				margin: 0 auto;
			}
			
			img.fullwidth,
			img.fullwidthOnMobile {
				max-width: 100% !important;
			}
			
			.no-stack .col {
				min-width: 0 !important;
				display: table-cell !important;
			}
			
			.no-stack.two-up .col {
				width: 50% !important;
			}
			
			.no-stack .col.num2 {
				width: 16.6% !important;
			}
			
			.no-stack .col.num3 {
				width: 25% !important;
			}
			
			.no-stack .col.num4 {
				width: 33% !important;
			}
			
			.no-stack .col.num5 {
				width: 41.6% !important;
			}
			
			.no-stack .col.num6 {
				width: 50% !important;
			}
			
			.no-stack .col.num7 {
				width: 58.3% !important;
			}
			
			.no-stack .col.num8 {
				width: 66.6% !important;
			}
			
			.no-stack .col.num9 {
				width: 75% !important;
			}
			
			.no-stack .col.num10 {
				width: 83.3% !important;
			}
			
			.video-block {
				max-width: none !important;
			}

			.mobile_hide {
				min-height: 0px;
				max-height: 0px;
				max-width: 0px;
				display: none;
				overflow: hidden;
				font-size: 0px;
			}
			
			.desktop_hide {
				display: block !important;
				max-height: none !important;
			}
		}
		</style>
<style id="icon-media-query" type="text/css">
		@media (max-width: 620px) {
			.icons-inner {
				text-align: center;
			}
			
			.icons-inner td {
				margin: 0 auto;
			}
		}
		</style>
</head>
<body class="clean-body" style="margin: 0; padding: 0; -webkit-text-size-adjust: 100%; background-color: #FFFFFF;">
	<!--[if IE]><div class="ie-browser"><![endif]-->
	<table bgcolor="#FFFFFF" cellpadding="0" cellspacing="0" class="nl-container" role="presentation" style="table-layout: fixed; vertical-align: top; min-width: 320px; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #FFFFFF; width: 100%;" valign="top" width="100%">
		<tbody>
			<tr style="vertical-align: top;" valign="top">
				<td style="word-break: break-word; vertical-align: top;" valign="top">
					<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td align="center" style="background-color:#FFFFFF"><![endif]-->
					<div style="background-color:#eff0e9;">
						<div class="block-grid" style="min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; Margin: 0 auto; background-color: #ffffff;">
							<div style="border-collapse: collapse;display: table;width: 100%;background-color:#f6f6f6;">
<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:#eff0e9;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px"><tr class="layout-full-width" style="background-color:#ffffff"><![endif]-->
<!--[if (mso)|(IE)]><td align="center" width="600" style="background-color:#ffffff;width:600px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:15px; padding-bottom:15px;"><![endif]-->
<div class="col num12" style="min-width: 320px; max-width: 600px; display: table-cell; vertical-align: top; width: 600px;">
	<div class="col_cont" style="width:100% !important;">
		<!--[if (!mso)&(!IE)]><!-->
		<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:15px; padding-bottom:15px; padding-right: 0px; padding-left: 0px;">
			<!--<![endif]-->
			<div align="left" class="img-container center autowidth" style="padding-right: 10px;padding-left: 10px;">
				<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr style="line-height:0px"><td style="padding-right: 0px;padding-left: 0px;" align="center"><![endif]--><img align="center" alt="Image" border="0" class="center autowidth" src="images/logo-site.png" style="text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: 0; width: 50%; max-width: 500px; display: inline-block;" title="Image" width="500"/>
				
				<span style="word-break: break-word; vertical-align: top; padding-top: 10px; padding-right: 10px; padding-left: 0; float: right;" valign="top"><a href="https://www.instagram.com/lamadrilena.ok/" target="_blank"><img alt="Instagram" height="32" src="https://www.tienda.eloy.com.ar/pub/media/wysiwyg/Eloy/facebook.png" style="text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: 0; display: block;" title="Instagram" width="32"/></a></span>
				<span style="word-break: break-word; vertical-align: top; padding-top: 10px; padding-right: 10px; padding-left: 0; float:right;" valign="top"><a href="https://www.facebook.com/lamadrilena.ok/" target="_blank"><img alt="Facebook" height="32" src="https://www.tienda.eloy.com.ar/pub/media/wysiwyg/instagram-lite.png" style="text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: 0; display: block;" title="Facebook" width="32"/></a></span>
				<!--[if mso]></td></tr></table><![endif]-->
			</div>
			<!--[if (!mso)&(!IE)]><!-->
		</div>
		<!--<![endif]-->
	</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
</div>
</div>
</div>


<div style="background-color:#eff0e9;">
	<div class="block-grid" style="min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; Margin: 0 auto; background-color: #ffffff;">
		<div style="border-collapse: collapse;display: table;width: 100%;background-color:#fff;">
			<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:#eff0e9;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px"><tr class="layout-full-width" style="background-color:#ffffff"><![endif]-->
			<!--[if (mso)|(IE)]><td align="center" width="600" style="background-color:#ffffff;width:600px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px;"><![endif]-->
			<div class="col num12" style="min-width: 320px; max-width: 600px; display: table-cell; vertical-align: top; width: 600px;">
				<div class="col_cont" style="width:100% !important;">
					<!--[if (!mso)&(!IE)]><!-->
					<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">
						<!--<![endif]-->
						<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 20px; padding-left: 20px; padding-top: 20px; padding-bottom: 10px; font-family: Arial, sans-serif"><![endif]-->
						<div style="color:#333;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;line-height:1.2;padding-top:40px;padding-right:20px;padding-bottom:30px;padding-left:20px;">
							<div class="txtTinyMce-wrapper" style="line-height: 1.2; text-align: center; font-size: 12px; font-family: Arial, Helvetica Neue, Helvetica, sans-serif; color: #666; mso-line-height-alt: 14px;">
								<p style="font-size: 14px; line-height: 1.1; word-break: break-word; font-family: lucida sans unicode, lucida grande, sans-serif; mso-line-height-alt: 22px; margin: 10px 20px;"><span style="font-size: 18px; font-weight: 300;"><strong>Hola!</strong> Queremos regalarte un cupón de descuento por un 10% para que puedas experimentar tu primer compra en nuestra tienda online.</span></p>
							</div>
						</div>
					</div>
					<!--<![endif]-->
				</div>
			</div>
			<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
			<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
		</div>
	</div>
</div>


<div style="background-color:#eff0e9;">
	<div class="block-grid two-up" style="min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; Margin: 0 auto; background-color: #ffffff;">
		<div style="border-collapse: collapse;display: table;width: 100%;background-color:#f3f3f3;">
			<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:#eff0e9;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px"><tr class="layout-full-width" style="background-color:#ffffff"><![endif]-->
			<!--[if (mso)|(IE)]><td align="center" width="300" style="background-color:#ffffff;width:300px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 15px; padding-left: 15px; padding-top:5px; padding-bottom:5px;"><![endif]-->
<div class="col num6" style="display: table-cell; vertical-align: top; max-width: 320px; min-width: 300px; width: 300px;">
	<div class="col_cont" style="width:100% !important;">
		<!--[if (!mso)&(!IE)]><!-->
		<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 15px; padding-left: 15px;">
			<!--<![endif]-->
			<div align="center" class="img-container center autowidth" style="padding-right: 0px;padding-left: 0px;">
				<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr style="line-height:0px"><td style="padding-right: 0px;padding-left: 0px;" align="center"><![endif]--><img align="center" border="0" class="center autowidth" src="<?= base_url($data->imagen)?>" style="text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: 0; width: 100%; max-width: 270px; display: block;" width="270"/>
				<!--[if mso]></td></tr></table><![endif]-->
			</div>
			<!--[if (!mso)&(!IE)]><!-->
		</div>
		<!--<![endif]-->
	</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
<!--[if (mso)|(IE)]></td><td align="center" width="300" style="background-color:#ffffff;width:300px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 0px; padding-top:5px; padding-bottom:5px;"><![endif]-->
<div class="col num6" style="display: table-cell; vertical-align: top; max-width: 320px; min-width: 300px; width: 300px;">
	<div class="col_cont" style="width:100% !important;">
		<!--[if (!mso)&(!IE)]><!-->
		<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 10px; padding-left: 0px;">
			<!--<![endif]-->
			<table cellpadding="0" cellspacing="0" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" valign="top" width="100%">
				<tr style="vertical-align: top;" valign="top">
					<td align="center" style="word-break: break-word; vertical-align: top; padding-bottom: 0px; padding-left: 0px; padding-right: 0px; padding-top: 15px; text-align: center; width: 100%;" valign="top" width="100%">
						<h1 style="color:#666;direction:ltr;font-family:'Helvetica Neue', Helvetica, Arial, sans-serif;font-size:32px;font-weight:normal;letter-spacing:normal;line-height:120%;text-align:center;margin-top:0;margin-bottom:0;"><strong>10%OFF</strong></h1>
					</td>
				</tr>
			</table>
			<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px; font-family: Arial, sans-serif"><![endif]-->
			<div style="color:#555555;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;line-height:1.5;padding-top:10px;padding-right:10px;padding-left:10px;">
				<div class="txtTinyMce-wrapper" style="line-height: 1.5; font-size: 12px; color: #555555; font-family: Arial, Helvetica Neue, Helvetica, sans-serif; mso-line-height-alt: 18px;">
					<p style="font-size: 8px; color: #999; line-height: 1.1; word-break: break-word; text-align: center; mso-line-height-alt: 16px; margin: 0;"><strong><span style="font-size: 14px;">Código:</span></strong></p>
					<p style="font-size: 22px; color: #666; line-height: 1.5; word-break: break-word; text-align: center; mso-line-height-alt: 21px; margin: 0;">XXXXXXX</p>
					<p style="text-align: center"><a href="https://www.tienda.lamadrilena.com.ar/" style="-webkit-text-size-adjust: none; text-decoration: none; display: inline-block; color: #ffffff; background-color: #e61a22; border-radius: 0px; -webkit-border-radius: 0px; -moz-border-radius: 0px; width: auto; width: auto; border-top: 1px solid #e61a22; border-right: 1px solid #e61a22; border-bottom: 1px solid #e61a22; border-left: 1px solid #e61a22; padding-top: 6px; padding-bottom: 6px; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; text-align: center; mso-border-alt: none; word-break: keep-all;" target="_blank"><span style="padding-left:15px;padding-right:15px;font-size:14px;display:inline-block;letter-spacing:undefined;"><span style="font-size: 16px; line-height: 2; word-break: break-word; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; mso-line-height-alt: 32px;"><span data-mce-style="font-size: 14px; line-height: 32px;" style="font-size: 14px; line-height: 32px;">USAR CUPÓN</span></span></span></a></p>
				</div>
</div>
<!--[if mso]></td></tr></table><![endif]-->
<!--[if (!mso)&(!IE)]><!-->
</div>
<!--<![endif]-->
</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
</div>
</div>
</div>
<div style="background-color:#eff0e9;">
	<div class="block-grid" style="min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; Margin: 0 auto; background-color: #ffffff;">
		<div style="border-collapse: collapse;display: table;width: 100%;background-color:#ffffff;">
			<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:#eff0e9;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px"><tr class="layout-full-width" style="background-color:#ffffff"><![endif]-->
			<!--[if (mso)|(IE)]><td align="center" width="600" style="background-color:#ffffff;width:600px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px;"><![endif]-->
			<div class="col num12" style="min-width: 320px; max-width: 600px; display: table-cell; vertical-align: top; width: 600px;">
				<div class="col_cont" style="width:100% !important;">
					<!--[if (!mso)&(!IE)]><!-->
					<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">
						<!--<![endif]-->
						<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 20px; padding-left: 20px; padding-top: 20px; padding-bottom: 10px; font-family: Arial, sans-serif"><![endif]-->
						<div style="color:#e61a22;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;line-height:1.2;padding-top:20px;padding-right:20px;padding-bottom:10px;padding-left:20px;">
							<div class="txtTinyMce-wrapper" style="line-height: 1.2; font-size: 12px; font-family: Arial, Helvetica Neue, Helvetica, sans-serif; color: #e61a22; mso-line-height-alt: 14px;">
								<p style="font-size: 18px; line-height: 1.2; word-break: break-word; text-align: center; font-family: lucida sans unicode, lucida grande, sans-serif; mso-line-height-alt: 22px; margin: 0;"><span style="font-size: 18px;"><strong><span style="">UTILIZÁ EL CÓDIGO DE CUPÓN:</span></strong></span></p>
								<p style="font-size: 24px; line-height: 1.2; word-break: break-word; text-align: center; font-family: lucida sans unicode, lucida grande, sans-serif; mso-line-height-alt: 29px; margin: 0;"><span style="font-size: 24px;"><strong><span style="">MADRI2021XP</span></strong></span></p>
							</div>
						</div>
						<!--[if mso]></td></tr></table><![endif]-->
						<div align="center" class="button-container" style="padding-top:0px;padding-right:0px;padding-bottom:30px;padding-left:0px;">
							<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-spacing: 0; border-collapse: collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;"><tr><td style="padding-top: 0px; padding-right: 0px; padding-bottom: 30px; padding-left: 0px" align="center"><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="https://www.tienda.lamadrilena.com.ar/" style="height:39pt;width:180.75pt;v-text-anchor:middle;" arcsize="0%" stroke="false" fillcolor="#e61a22"><w:anchorlock/><v:textbox inset="0,0,0,0"><center style="color:#ffffff; font-family:Arial, sans-serif; font-size:16px"><![endif]--><a href="https://www.tienda.lamadrilena.com.ar/" style="-webkit-text-size-adjust: none; text-decoration: none; display: inline-block; color: #ffffff; background-color: #e61a22; border-radius: 0px; -webkit-border-radius: 0px; -moz-border-radius: 0px; width: auto; width: auto; border-top: 1px solid #e61a22; border-right: 1px solid #e61a22; border-bottom: 1px solid #e61a22; border-left: 1px solid #e61a22; padding-top: 10px; padding-bottom: 10px; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; text-align: center; mso-border-alt: none; word-break: keep-all;" target="_blank"><span style="padding-left:25px;padding-right:25px;font-size:16px;display:inline-block;letter-spacing:undefined;"><span style="font-size: 16px; line-height: 2; word-break: break-word; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; mso-line-height-alt: 32px;"><span data-mce-style="font-size: 16px; line-height: 32px;" style="font-size: 16px; line-height: 32px;">VISITAR LA TIENDA</span></span></span></a>
<!--[if mso]></center></v:textbox></v:roundrect></td></tr></table><![endif]-->
</div>
<!--[if (!mso)&(!IE)]><!-->
</div>
<!--<![endif]-->
</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
</div>
</div>
</div>
<div style="background-color:#eff0e9;">
	<div class="block-grid three-up" style="min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; Margin: 0 auto; background-color: #ffffff;">
		<div style="border-collapse: collapse;display: table;width: 100%;background-color:#ffffff;">
			<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:#eff0e9;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px"><tr class="layout-full-width" style="background-color:#ffffff"><![endif]-->
			<!--[if (mso)|(IE)]><td align="center" width="200" style="background-color:#ffffff;width:200px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top:15px; padding-bottom:15px;"><![endif]-->
			<div class="col num4" style="display: table-cell; vertical-align: top; max-width: 320px; min-width: 200px; width: 200px;">
				<div class="col_cont" style="width:100% !important;">
					<!--[if (!mso)&(!IE)]><!-->
					<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:15px; padding-bottom:15px; padding-right: 10px; padding-left: 10px;">
						<!--<![endif]-->
<div align="center" class="img-container center autowidth fullwidth" style="padding-right: 0px;padding-left: 0px;">
	<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr style="line-height:0px"><td style="padding-right: 0px;padding-left: 0px;" align="center"><![endif]--><img align="center" alt="Image" border="0" class="center autowidth fullwidth" src="<?= base_url($data->imagen)?>" style="text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: 0; width: 100%; max-width: 180px; display: block;" title="Image" width="180"/>
	<!--[if mso]></td></tr></table><![endif]-->
</div>
<!--[if (!mso)&(!IE)]><!-->
</div>
<!--<![endif]-->
</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
<!--[if (mso)|(IE)]></td><td align="center" width="200" style="background-color:#ffffff;width:200px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top:15px; padding-bottom:15px;"><![endif]-->
<div class="col num4" style="display: table-cell; vertical-align: top; max-width: 320px; min-width: 200px; width: 200px;">
	<div class="col_cont" style="width:100% !important;">
		<!--[if (!mso)&(!IE)]><!-->
		<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:15px; padding-bottom:15px; padding-right: 10px; padding-left: 10px;">
			<!--<![endif]-->
			<div align="center" class="img-container center autowidth fullwidth" style="padding-right: 0px;padding-left: 0px;">
				<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr style="line-height:0px"><td style="padding-right: 0px;padding-left: 0px;" align="center"><![endif]--><img align="center" alt="Image" border="0" class="center autowidth fullwidth" src="images/lm_marroquineria_lt.jpg" style="text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: 0; width: 100%; max-width: 180px; display: block;" title="Image" width="180"/>
				<!--[if mso]></td></tr></table><![endif]-->
			</div>
			<!--[if (!mso)&(!IE)]><!-->
		</div>
		<!--<![endif]-->
	</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
<!--[if (mso)|(IE)]></td><td align="center" width="200" style="background-color:#ffffff;width:200px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top:15px; padding-bottom:15px;"><![endif]-->
<div class="col num4" style="display: table-cell; vertical-align: top; max-width: 320px; min-width: 200px; width: 200px;">
	<div class="col_cont" style="width:100% !important;">
		<!--[if (!mso)&(!IE)]><!-->
		<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:15px; padding-bottom:15px; padding-right: 10px; padding-left: 10px;">
			<!--<![endif]-->
			<div align="center" class="img-container center autowidth fullwidth" style="padding-right: 0px;padding-left: 0px;">
<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr style="line-height:0px"><td style="padding-right: 0px;padding-left: 0px;" align="center"><![endif]--><img align="center" alt="Image" border="0" class="center autowidth fullwidth" src="<?= base_url($data->imagen)?>" style="text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: 0; width: 100%; max-width: 180px; display: block;" title="Image" width="180"/>
<!--[if mso]></td></tr></table><![endif]-->
</div>
<!--[if (!mso)&(!IE)]><!-->
</div>
<!--<![endif]-->
</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
</div>
</div>
</div>
<div style="background-color:#eff0e9;">
	<div class="block-grid" style="min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; Margin: 0 auto; background-color: #e61a22;">
		<div style="border-collapse: collapse;display: table;width: 100%;background-color:#e61a22;">
			<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:#eff0e9;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px"><tr class="layout-full-width" style="background-color:#e61a22"><![endif]-->
			<!--[if (mso)|(IE)]><td align="center" width="600" style="background-color:#e61a22;width:600px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px;"><![endif]-->
			<div class="col num12" style="min-width: 320px; max-width: 600px; display: table-cell; vertical-align: top; width: 600px;">
				<div class="col_cont" style="width:100% !important;">
					<!--[if (!mso)&(!IE)]><!-->
					<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">
<!--<![endif]-->
<table cellpadding="0" cellspacing="0" class="social_icons" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" valign="top" width="100%">
	<tbody>
		<tr style="vertical-align: top;" valign="top">
			<td style="word-break: break-word; vertical-align: top; padding-top: 10px; padding-right: 10px; padding-bottom: 20px; padding-left: 10px;" valign="top">
				<table align="center" cellpadding="0" cellspacing="0" class="social_table" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-tspace: 0; mso-table-rspace: 0; mso-table-bspace: 0; mso-table-lspace: 0;" valign="top">
<tbody>
	<tr align="center" style="vertical-align: top; display: inline-block; text-align: center;" valign="top">
<td style="word-break: break-word; vertical-align: top; padding-bottom: 5px; padding-right: 10px; padding-left: 0;" valign="top"><a href="https://www.facebook.com/lamadrilena.ok/" target="_blank"><img alt="Facebook" height="32" src="images/facebook.png" style="text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: 0; display: block;" title="Facebook" width="32"/></a></td>
<td style="word-break: break-word; vertical-align: top; padding-bottom: 5px; padding-right: 10px; padding-left: 0;" valign="top"><a href="https://www.instagram.com/lamadrilena.ok/" target="_blank"><img alt="Instagram" height="32" src="images/instagram2x.png" style="text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: 0; display: block;" title="Instagram" width="32"/></a></td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<!--[if (!mso)&(!IE)]><!-->
</div>
<!--<![endif]-->
</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
</div>
</div>
<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 20px; padding-left: 20px; padding-top: 0px; padding-bottom: 20px; font-family: Arial, sans-serif"><![endif]-->
<div style="color:#555555;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;line-height:1.5;padding-top:0px;padding-right:20px;padding-bottom:20px;padding-left:20px;">
	<div class="txtTinyMce-wrapper" style="line-height: 1.5; font-size: 12px; font-family: Arial, Helvetica Neue, Helvetica, sans-serif; color: #555555; mso-line-height-alt: 18px;">
		<p style="font-size: 14px; line-height: 1.5; word-break: break-word; text-align: center; font-family: lucida sans unicode, lucida grande, sans-serif; mso-line-height-alt: 21px; margin: 0;"><span style="font-size: 14px;">Válido para compras online en el sitio web (https://www.tienda.lamadrilena.com.ar/) teniendo como importe mínimo $1500. No acumulable con otras promociones ni tampoco para métodos de envio.</span></p>
</div>
</div>
<!--[if mso]></td></tr></table><![endif]-->
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
</td>
</tr>
</tbody>
</table>
<!--[if (IE)]></div><![endif]-->
</body>
</html>

<?php }?>