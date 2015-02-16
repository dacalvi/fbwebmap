<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Sucursales</title>
	<style type="text/css">.gm-style .gm-style-iw{font-weight:300;font-size:13px}.gm-style .gm-iw{color:#2c2c2c}.gm-style .gm-iw b{font-weight:400}.gm-style .gm-iw a:link,.gm-style .gm-iw a:visited{color:#4272db;text-decoration:none}.gm-style .gm-iw a:hover{color:#4272db;text-decoration:underline}.gm-style .gm-iw .gm-title{font-weight:400;margin-bottom:1px}.gm-style .gm-iw .gm-basicinfo{line-height:18px;padding-bottom:12px}.gm-style .gm-iw .gm-website{padding-top:6px}.gm-style .gm-iw .gm-photos{padding-bottom:8px;-ms-user-select:none;-moz-user-select:none;-webkit-user-select:none}.gm-style .gm-iw .gm-sv,.gm-style .gm-iw .gm-ph{cursor:pointer;height:50px;width:100px;position:relative;overflow:hidden}.gm-style .gm-iw .gm-sv{padding-right:4px}.gm-style .gm-iw .gm-wsv{cursor:pointer;position:relative;overflow:hidden}.gm-style .gm-iw .gm-sv-label,.gm-style .gm-iw .gm-ph-label{cursor:pointer;position:absolute;bottom:6px;color:#fff;font-weight:400;text-shadow:rgba(0,0,0,0.7) 0 1px 4px;font-size:12px}.gm-style .gm-iw .gm-stars-b,.gm-style .gm-iw .gm-stars-f{height:13px;font-size:0}.gm-style .gm-iw .gm-stars-b{position:relative;background-position:0 0;width:65px;top:3px;margin:0 5px}.gm-style .gm-iw .gm-rev{line-height:20px;-ms-user-select:none;-moz-user-select:none;-webkit-user-select:none}.gm-style .gm-iw .gm-numeric-rev{font-size:16px;color:#dd4b39;font-weight:400}.gm-style .gm-iw.gm-transit{margin-left:15px}.gm-style .gm-iw.gm-transit 
	td{vertical-align:top}.gm-style .gm-iw.gm-transit .gm-time{white-space:nowrap;color:#676767;font-weight:bold}.gm-style .gm-iw.gm-transit 
	img{width:15px;height:15px;margin:1px 5px 0 -20px;float:left}.gm-iw {text-align:left;}.gm-iw .gm-numeric-rev {float:left;}.gm-iw .gm-photos,.gm-iw .gm-rev {direction:ltr;}.gm-iw .gm-stars-f, .gm-iw .gm-stars-b {background:url("https://maps.gstatic.com/mapfiles/api-3/images/review_stars.png") no-repeat;background-size: 65px 26px;float:left;}.gm-iw .gm-stars-f {background-position:left -13px;}.gm-iw .gm-sv-label,.gm-iw .gm-ph-label {left: 4px;}</style><style type="text/css">.gm-style .gm-style-mtc label,.gm-style .gm-style-mtc div{font-weight:400}</style><style type="text/css">.gm-style .gm-style-cc span,.gm-style .gm-style-cc a,.gm-style .gm-style-mtc div{font-size:10px}
	</style>
	<style type="text/css">
	@media print {  .gm-style .gmnoprint, .gmnoprint {    display:none  }}@media screen {  .gm-style .gmnoscreen, .gmnoscreen {    display:none  }}</style><link type="text/css" rel="stylesheet" href="./Banco Regional — Creemos en vos_files/css"><style type="text/css">.gm-style{font-family:Roboto,Arial,sans-serif;font-size:11px;font-weight:400;text-decoration:none}</style><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"><title>Banco Regional — Creemos en vos</title><link rel="icon" type="image/ico" href="https://www.regional.com.py/favicon.ico"><!-- for Google --><meta name="author" content="Banco Regional S.A.E.C.A."><meta name="copyright" content="© 2014 Banco Regional S.A.E.C.A."><meta name="description" content="Somos un banco comprometido con el éxito de nuestros clientes. Innovamos permanentemente para ser el banco de la gente exitosa y protagonista del desarrollo del país."><meta name="keywords" content="banco, regional, paraguay, préstamos, paquete, integral, select, beneficios, tarjetas, crédito, débito, viajes, vacaciones, cotizaciones, ahorro, seguros, financiación, cuenta corriente, préstamo casa, préstamo auto, préstamo educación, banca móvil, banca web, homebanking, puntos">
	<meta name="application-name" content="Banco Regional — Creemos en vos"><!-- for Facebook --><meta property="og:url" content="https://www.regional.com.py/"><meta property="og:description" content="Somos un banco comprometido con el éxito de nuestros clientes. Innovamos permanentemente para ser el banco de la gente exitosa y protagonista del desarrollo del país."><meta property="og:site_name" content="Banco Regional — Creemos en vos"><meta property="og:title" content="Banco Regional — Creemos en vos"><meta property="og:type" content="website"><meta property="og:locale" content="es_LA"><meta property="og:image" content="https://www.regional.com.py/documentos/og_image.png">
	<meta property="fb:admins" content="100001741824083"><!-- for Twitter -->
	<meta name="twitter:card" content="summary"><meta name="twitter:title" content="Banco Regional — Creemos en vos">
<meta name="twitter:description" content="Somos un banco comprometido con el éxito de nuestros clientes. Innovamos permanentemente para ser el banco de la gente exitosa y protagonista del desarrollo del país."><meta name="twitter:image" content="https://www.regional.com.py/documentos/og_image.png"><!-- Bootstrap --><link href="https://www.regional.com.py/bundles/public/assets/css/bootstrap.min.css" rel="stylesheet"><!-- <link href="/bundles/public/assets/css/font.css" rel="stylesheet"> --><link rel="stylesheet" type="text/css" href="./Banco Regional — Creemos en vos_files/fonts.css"><link href="https://www.regional.com.py/bundles/public/assets/css/main.css" rel="stylesheet"><link href="https://www.regional.com.py/bundles/public/assets/css/font-awesome.css" rel="stylesheet"><link href="https://www.regional.com.py/bundles/public/assets/css/sky-tabs.css" rel="stylesheet"><!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries --><!-- WARNING: Respond.js doesn't work if you view the page via file:// --><!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->

		
	</script>
	<?php echo $map['js']; ?>
</head>
<body>
<?php echo $map['html']; ?>

	<div id="container">
	  <section class="map-content">
	</div>
	    <div class="container-selection">
	       <h4>¿Qué buscás?</h4>
	       <div class="checkbox">
			    <input id="branches" type="checkbox" name="check" value="branches">
				<label for="branches"><i class="fa fa-brand"></i>
					Sucursales
				</label>
				
			    <input id="atm" type="checkbox" name="atm" value="atm">
				<label for="atm"><i class="fa fa-brand"></i>
					Atm
				</label>
				
			</div>
		</div>
							
							
						
							

</section>
</body>
</html>