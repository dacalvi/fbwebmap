<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />

    <meta charset="utf-8">
    <title>Banco Regional</title>
    <base href="<?=base_url();?>">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css" media="screen" />
    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
    <script src="assets/js/map.js"></script>
 </head>

<?php
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />

<?php endforeach; ?>
<?php foreach($js_files as $file): ?>

	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>

<style type='text/css'>
body
{
	font-family: Arial;
	font-size: 14px;
}
a {
	color: blue;
	text-decoration: none;
	font-size: 14px;
}
a:hover
{
	text-decoration: underline;
}
</style>
</head>
<body>
<div class="container-selection"><h4>¿Qué buscás?</h4>
     <div class="checkbox"><input id="branches" type="checkbox" name="check" value="branches">
      <label for="branches"><i class="fa fa-brand"></i>
        Sucursales
      </label><br>
      <input id="atms" type="checkbox" name="check" value="atms">
      <label for="atms">
          <i class="fa fa-atm"></i>
              ATM's
      </label><br>
     </div>
    </div>

    <div id="map"></div>
    <script type="text/javascript">
         $(document).ready(function () {
           initialize();
         });
    </script>
    <script type="text/javascript">
$(document).ready(function () {
  var atm_content = {
    "result":{
          "atms":[<?php foreach ($datos as $dato) : ?>
                  {
          "titulo" : "<?php echo $dato['nombre'];?>",
          "latitud" : "<?php echo $dato['latitud'] ;?>",
          "longitud" : "<?php echo $dato['longitud'];?>"
          },
          <?php endforeach;?>              {
                     ]
    }
  };

  loadAtm(atm_content);
})
</script>




<script type="text/javascript">
$(document).ready(function () {
  var atm_content = {
    "result":{
          "branches":[
                  {
          "titulo" : "SUPERSEIS",
          "latitud" : "-27.340928",
          "longitud" : "-55.857650"
          },              {
          "titulo" : "ASUNCION CENTRO",
          "latitud" : "-25.281961",
          "longitud" : "-57.635261"
          },              {
          "titulo" : "BELLA VISTA",
          "latitud" : "-27.043575",
          "longitud" : "-55.578806"
          },              {
          "titulo" : "BUENA VISTA",
          "latitud" : "-27.359036",
          "longitud" : "-55.849325"
          },              {
          "titulo" : "BULNES",
          "latitud" : "-25.285317",
          "longitud" : "-57.578436"
          },              {
          "titulo" : "C.D.E. AREA 1",
          "latitud" : "-25.515881",
          "longitud" : "-54.642808"
          },              {
          "titulo" : "CAPIATA",
          "latitud" : "-25.365000",
          "longitud" : "-57.482158"
          },              {
          "titulo" : "CORONEL BOGADO",
          "latitud" : "-27.156461",
          "longitud" : "-56.244336"
          },              {
          "titulo" : "CORONEL OVIEDO",
          "latitud" : "-25.444019",
          "longitud" : "-56.442367"
          },              {
          "titulo" : "CURUGUATY",
          "latitud" : "-24.470581",
          "longitud" : "-55.693397"
          },              {
          "titulo" : "ENCARNACION",
          "latitud" : "-27.332050",
          "longitud" : "-55.864703"
          },              {
          "titulo" : "EUSEBIO AYALA",
          "latitud" : "-25.300569",
          "longitud" : "-57.619400"
          },              {
          "titulo" : "FERNANDO DE LA MORA",
          "latitud" : "-25.328642",
          "longitud" : "-57.545767"
          },              {
          "titulo" : "FRAM",
          "latitud" : "-27.099564",
          "longitud" : "-56.010894"
          },              {
          "titulo" : "HERNANDARIAS",
          "latitud" : "-25.393692",
          "longitud" : "-54.637017"
          },              {
          "titulo" : "KATUETE",
          "latitud" : "-24.154825",
          "longitud" : "-54.665311"
          },              {
          "titulo" : "LA PAZ",
          "latitud" : "-26.993031",
          "longitud" : "-55.889594"
          },              {
          "titulo" : "MARIA AUXILIADORA",
          "latitud" : "-26.526692",
          "longitud" : "-55.263111"
          },              {
          "titulo" : "MARIANO R. ALONSO",
          "latitud" : "-25.236931",
          "longitud" : "-57.540750"
          },              {
          "titulo" : "Shopping Mariscal",
          "latitud" : "-25.294931",
          "longitud" : "-57.580942"
          },              {
          "titulo" : "NARANJAL",
          "latitud" : "-25.973403",
          "longitud" : "-55.189231"
          },              {
          "titulo" : "OBLIGADO",
          "latitud" : "-27.061381",
          "longitud" : "-55.634897"
          },              {
          "titulo" : "PAB 1 ITAIPU ASUNCION",
          "latitud" : "-25.288069",
          "longitud" : "-57.613975"
          },              {
          "titulo" : "PAB 3 ITAIPU HERNANDARIAS",
          "latitud" : "-25.417019",
          "longitud" : "-54.617392"
          },              {
          "titulo" : "PEDRO JUAN CABALLERO",
          "latitud" : "-22.537042",
          "longitud" : "-55.733606"
          },              {
          "titulo" : "PIRAPO",
          "latitud" : "-26.858375",
          "longitud" : "-55.547678"
          },              {
          "titulo" : "SAN ALBERTO",
          "latitud" : "-24.978033",
          "longitud" : "-54.914164"
          },              {
          "titulo" : "SAN CRISTOBAL",
          "latitud" : "-25.892408",
          "longitud" : "-55.466058"
          },              {
          "titulo" : "SAN MARTIN",
          "latitud" : "-25.289200",
          "longitud" : "-57.573611"
          },              {
          "titulo" : "SANTA RITA",
          "latitud" : "-25.795961",
          "longitud" : "-55.088794"
          },              {
          "titulo" : "SANTA ROSA DEL AGUARAY",
          "latitud" : "-23.823106",
          "longitud" : "-56.518661"
          },              {
          "titulo" : "SANTA ROSA DEL MONDAY",
          "latitud" : "-25.819689",
          "longitud" : "-54.904244"
          },              {
          "titulo" : "VILLA MORRA",
          "latitud" : "-25.295050",
          "longitud" : "-57.578319"
          },              {
          "titulo" : "VILLARRICA",
          "latitud" : "-25.778900",
          "longitud" : "-56.446467"
          },              {
          "titulo" : "SAN LORENZO",
          "latitud" : "-25.34234167",
          "longitud" : "-57.50505278"
          },              {
          "titulo" : "CASA MATRIZ",
          "latitud" : "-27.332050",
          "longitud" : "-55.864703"
          },              {
          "titulo" : "C.D.E. CENTRO",
          "latitud" : "-25.512658",
          "longitud" : "-54.613042"
          }           ]
    }
  };

  loadBranch(atm_content);
});
</script>


 
<!-- End of header-->
	<div style='height:20px;'></div>
	<div>
		<?php echo $output; ?>

	</div>
<!-- Beginning footer -->
<div>Footer</div>
<!-- End of Footer -->
</body>
</html>