<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Marker Animations</title>
    <style>
      html, body, #map-canvas {
        height: 100%;
        margin: 0px;
        padding: 0px
      }
    </style>
    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
    <script src="/assets/js/map.js"></script>
  </head>
  <body>
    <div class="container-selection"><h4>¿Qué buscás?</h4><div class="checkbox"><input id="branches" type="checkbox" name="check" value="branches"><label for="branches"><i class="fa fa-brand"></i>
        Sucursales
      </label><br><input id="atms" type="checkbox" name="check" value="atms"><label for="atms"><i class="fa fa-atm"></i>
        ATM's
      </label><br></div></div>

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
          "atms":[
                  {
          "titulo" : "CAJERO AUT. - PUMA ENCARNACION RUTA 6TA",
          "latitud" : "-27.311222",
          "longitud" : "-55.843881"
          },              {
          "titulo" : "CAJERO AUT. - PUNTO FARMA VILLA AURELIA",
          "latitud" : "-25.302025",
          "longitud" : "-57.562872"
          },              {
          "titulo" : "CAJERO AUT. - SUPER. EL PUEBLO LAMBARE",
          "latitud" : "-25.334597",
          "longitud" : "-57.612761"
          },              {
          "titulo" : "CAJERO AUT. - SUPER. VILLA SOFIA",
          "latitud" : "-25.289372",
          "longitud" : "-57.656925"
          },              {
          "titulo" : "CAJERO AUT. - PETROBAS KM4 JOCKEY CLUB ASUNCION",
          "latitud" : "-25.289372",
          "longitud" : "-57.656925"
          },              {
          "titulo" : "CAJERO AUT. - F. FARMATITU LUQUE CENTRO",
          "latitud" : "-25.267483",
          "longitud" : "-57.492439"
          },              {
          "titulo" : "CAJERO AUT. - PETROPAR HERNANDARIAS",
          "latitud" : "-25.434811",
          "longitud" : "-54.637619"
          },              {
          "titulo" : "CAJERO AUT. - SHOPPING PINEDO",
          "latitud" : "-25.32349",
          "longitud" : "-57.520253"
          },              {
          "titulo" : "CAJERO AUT. - F. VITALMED CDE",
          "latitud" : "-25.531850",
          "longitud" : "-54.627031"
          },              {
          "titulo" : "CAJERO AUT.  - SUC. LA PAZ",
          "latitud" : "-26.993031",
          "longitud" : "-55.889594"
          },              {
          "titulo" : "CAJERO AUT. - SUC. BUENA VISTA",
          "latitud" : "-27.359036",
          "longitud" : "-55.849325"
          },              {
          "titulo" : "CAJERO AUT. - SUC. BULNES Nº2",
          "latitud" : "-25.285317",
          "longitud" : "-57.578436"
          },              {
          "titulo" : "CAJERO AUT. - SUC. BULNES Nº2",
          "latitud" : "-25.285317",
          "longitud" : "-57.578436"
          },              {
          "titulo" : "CAJERO AUT. - SUC CDE CENTRO Nº1",
          "latitud" : "-25.512692",
          "longitud" : "-54.612892"
          },              {
          "titulo" : "CAJERO AUT. - SHOPPING MINA INDIA CDE",
          "latitud" : "-25.508958",
          "longitud" : "-54.608100"
          },              {
          "titulo" : "CAJERO AUT. - CANTERO DE OBRAS ITAIPU",
          "latitud" : "-25.408119",
          "longitud" : "-54.589675"
          },              {
          "titulo" : "CAJERO AUT. - SUC CDE CENTRO Nº2",
          "latitud" : "-25.512700",
          "longitud" : "-54.612875"
          },              {
          "titulo" : "CAJERO AUT. - CARGILL AGROPECUARIA KM28",
          "latitud" : "-25.484928",
          "longitud" : "-54.883633"
          },              {
          "titulo" : "CAJERO AUT. - PETROBRAS KM4 CDE",
          "latitud" : "-25.511475",
          "longitud" : "-54.640275"
          },              {
          "titulo" : "CAJERO AUT. - CLUB INT. DE TENIS (CIT)",
          "latitud" : "-25.288192",
          "longitud" : "-57.544369"
          },              {
          "titulo" : "CAJERO AUT. - SUC. CORONEL BOGADO",
          "latitud" : "-27.156461",
          "longitud" : "-56.244336"
          },              {
          "titulo" : "CAJERO AUT. - SUC. CORONEL OVIEDO",
          "latitud" : "-25.444019",
          "longitud" : "-56.442367"
          },              {
          "titulo" : "CAJERO AUT. - COSTANERA ENCAR. PLAYA SAN JOSE",
          "latitud" : "-27.335681",
          "longitud" : "-55.872994"
          },              {
          "titulo" : "CAJERO AUT. - PEBROBRAS CORONEL OVIEDO",
          "latitud" : "-25.465658",
          "longitud" : "-56.449572"
          },              {
          "titulo" : "CAJERO AUT. - SUC. CURUGUATY",
          "latitud" : "-24.470581",
          "longitud" : "-55.693397"
          },              {
          "titulo" : "CAJERO AUT. - PUMA LAMBARE",
          "latitud" : "-25.340381",
          "longitud" : "-57.596475"
          },              {
          "titulo" : "CAJERO AUT. - ESSO VILLA AURELIA (HIPER SEIS)",
          "latitud" : "-25.302167",
          "longitud" : "-57.563275"
          },              {
          "titulo" : "CAJERO AUT. - SUC. EUSEBIO AYALA ASUNCION",
          "latitud" : "-25.300569",
          "longitud" : "-57.619400"
          },              {
          "titulo" : "CAJERO AUT. - F. SCAVONE ESPAÑA",
          "latitud" : "-25.286192",
          "longitud" : "-57.584036"
          },              {
          "titulo" : "CAJERO AUT. - F. SCAVONE MCAL. LOPEZ",
          "latitud" : "-25.293136",
          "longitud" : "-57.605819"
          },              {
          "titulo" : "CAJERO AUT. - F. SCAVONE ARTIGAS",
          "latitud" : "-25.274669",
          "longitud" : "-57.608547"
          },              {
          "titulo" : "CAJERO AUT. - F. CATEDRAL AVIADORES",
          "latitud" : "-25.275692",
          "longitud" : "-57.547153"
          },              {
          "titulo" : "CAJERO AUT. - SUC. FERNANDO DE LA MORA",
          "latitud" : "-25.328642",
          "longitud" : "-57.545767"
          },              {
          "titulo" : "CAJERO AUT. - SUC. FRAM",
          "latitud" : "-27.099564",
          "longitud" : "-56.010894"
          },              {
          "titulo" : "CAJERO AUT. - SUPER. GRAN VIA CDE",
          "latitud" : "-25.508169",
          "longitud" : "-54.638936"
          },              {
          "titulo" : "CAJERO AUT. - SUC. HERNANDARIAS",
          "latitud" : "-25.393692",
          "longitud" : "-54.637017"
          },              {
          "titulo" : "CAJERO AUT. - PAB 1 ITAIPU ASUNCION",
          "latitud" : "-25.288069",
          "longitud" : "-57.613975"
          },              {
          "titulo" : "CAJERO AUT. - PAB 3 ITAIPU HERNANDARIAS",
          "latitud" : "-25.417019",
          "longitud" : "-54.617392"
          },              {
          "titulo" : "CAJERO AUT. - SUC. KATUETE",
          "latitud" : "-24.154825",
          "longitud" : "-54.665311"
          },              {
          "titulo" : "CAJERO AUT. - PETROBRAS KM7 CDE",
          "latitud" : "-25.498458",
          "longitud" : "-54.662672"
          },              {
          "titulo" : "CAJERO AUT. - SUC. MARIA AUXILIADORA",
          "latitud" : "-26.526692",
          "longitud" : "-55.263111"
          },              {
          "titulo" : "CAJERO AUT. - SUC. MARIANO R. ALONSO",
          "latitud" : "-25.236931",
          "longitud" : "-57.540750"
          },              {
          "titulo" : "CAJERO AUT. - SHOPPING MALL EXCELSIOR",
          "latitud" : "-25.287719",
          "longitud" : "-57.638736"
          },              {
          "titulo" : "CAJERO AUT. - SUC. NARANJAL",
          "latitud" : "-25.973403",
          "longitud" : "-55.189231"
          },              {
          "titulo" : "CAJERO AUT. - SUC. CDE AREA1 N°1",
          "latitud" : "-25.515881",
          "longitud" : "-54.642808"
          },              {
          "titulo" : "CAJERO AUT. - SUC. CDE AREA1 N°2",
          "latitud" : "-25.515881",
          "longitud" : "-54.642808"
          },              {
          "titulo" : "CAJERO AUT. - SUC. PEDRO JUAN CABALLERO",
          "latitud" : "-22.537042",
          "longitud" : "-55.733606"
          },              {
          "titulo" : "CAJERO AUT. - PETROBRAS LAMBARE",
          "latitud" : "-25.341950",
          "longitud" : "-57.624744"
          },              {
          "titulo" : "CAJERO AUT. - PETROBRAS SAN LORENZO (CRUCE RUTA 1 Y 2)",
          "latitud" : "-25.342889",
          "longitud" : "-57.502306"
          },              {
          "titulo" : "CAJERO AUT. - PETROBRAS CARMEN DEL PARANA",
          "latitud" : "-27.219631",
          "longitud" : "-56.138731"
          },              {
          "titulo" : "CAJERO AUT. - PETROBRAS REMANSO",
          "latitud" : "-25.188739",
          "longitud" : "-57.541017"
          },              {
          "titulo" : "CAJERO AUT. - SUC. PIRAPO",
          "latitud" : "-26.858375",
          "longitud" : "-55.547678"
          },              {
          "titulo" : "CAJERO AUT. - PUMA MINGA GUAZU",
          "latitud" : "-25.490589",
          "longitud" : "-54.759069"
          },              {
          "titulo" : "CAJERO AUT. - PUNTO FARMA JULIO CORREA",
          "latitud" : "-25.272128",
          "longitud" : "-57.564986"
          },              {
          "titulo" : "CAJERO AUT. - PUNTO FARMA FELIX BOGADO",
          "latitud" : "-25.321967",
          "longitud" : "-57.628731"
          },              {
          "titulo" : "CAJERO AUT. - PUNTO FARMA LUQUE (BALDERRAMA)",
          "latitud" : "-25.265564",
          "longitud" : "-57.501694"
          },              {
          "titulo" : "CAJERO AUT. - PETROBRAS KM9 SALEMMA",
          "latitud" : "-25.334514",
          "longitud" : "-57.536147"
          },              {
          "titulo" : "CAJERO AUT. - SUC. SAN ALBERTO",
          "latitud" : "-24.978033",
          "longitud" : "-54.914164"
          },              {
          "titulo" : "CAJERO AUT. - SUC. SAN MARTIN",
          "latitud" : "-25.289200",
          "longitud" : "-57.573611"
          },              {
          "titulo" : "CAJERO AUT. - CADENA REAL ÑEMBY",
          "latitud" : "-25.393717",
          "longitud" : "-57.547300"
          },              {
          "titulo" : "CAJERO AUT. - SANATORIO SAN JOSE CDE",
          "latitud" : "-25.511342",
          "longitud" : "-54.654217"
          },              {
          "titulo" : "CAJERO AUT. - SUC. SANTA RITA",
          "latitud" : "-25.795961",
          "longitud" : "-55.088794"
          },              {
          "titulo" : "CAJERO AUT. - SUC. SANTA ROSA DEL MONDAY",
          "latitud" : "-25.819689",
          "longitud" : "-54.904244"
          },              {
          "titulo" : "CAJERO AUT. - SUC. SHOPPING MARISCAL Nº1",
          "latitud" : "-25.294931",
          "longitud" : "-57.580942"
          },              {
          "titulo" : "CAJERO AUT. - SUC. SHOPPING MARISCAL Nº2",
          "latitud" : "-25.294931",
          "longitud" : "-57.580942"
          },              {
          "titulo" : "CAJERO AUT. - SHOPPING MARIANO R. ALONSO",
          "latitud" : "-25.226094",
          "longitud" : "-57.535947"
          },              {
          "titulo" : "CAJERO AUT. - SHOPPING MULTIPLAZA",
          "latitud" : "-25.316303",
          "longitud" : "-57.570397"
          },              {
          "titulo" : "CAJERO AUT. - SHOPPING SAN LORENZO",
          "latitud" : "-25.342869",
          "longitud" : "-57.488344"
          },              {
          "titulo" : "CAJERO AUT. - AGRO SILO S. CATALINA",
          "latitud" : "-25.654683",
          "longitud" : "-54.721256"
          },              {
          "titulo" : "CAJERO AUT. - SUC. CAPIATA",
          "latitud" : "-25.365000",
          "longitud" : "-57.482158"
          },              {
          "titulo" : "CAJERO AUT. - SUC. SAN CRISTOBAL",
          "latitud" : "-25.892408",
          "longitud" : "-55.466058"
          },              {
          "titulo" : "CAJERO AUT. - SUC. SANTA ROSA DEL AGUARAY",
          "latitud" : "-23.823106",
          "longitud" : "-56.518661"
          },              {
          "titulo" : "CAJERO AUT. - GUARDIA OFIC. ITAIPU CDE - S. CARRETERA",
          "latitud" : "-25.521169",
          "longitud" : "-54.639881"
          },              {
          "titulo" : "CAJERO AUT. - SUC. SUPER SEIS",
          "latitud" : "-27.340928",
          "longitud" : "-55.857650"
          },              {
          "titulo" : "CAJERO AUT. - TIGO",
          "latitud" : "-25.346844",
          "longitud" : "-57.572086"
          },              {
          "titulo" : "CAJERO AUT. - SUC. VILLA MORRA",
          "latitud" : "-25.295050",
          "longitud" : "-57.578319"
          },              {
          "titulo" : "CAJERO AUT. - SUC. VILLARRICA Nº2",
          "latitud" : "-25.778900",
          "longitud" : "-56.446467"
          },              {
          "titulo" : "CAJERO AUT. - SUC. VILLARRICA Nº1",
          "latitud" : "-25.778903",
          "longitud" : "-56.446467"
          },              {
          "titulo" : "CAJERO AUT. - PUMA HERNANDARIAS",
          "latitud" : "-25.389267",
          "longitud" : "-54.640497"
          },              {
          "titulo" : "CAJERO AUT. - SUC. CENTRO Nº1",
          "latitud" : "-25.281961",
          "longitud" : "-57.635261"
          },              {
          "titulo" : "CAJERO AUT. - SUC. CENTRO Nº2",
          "latitud" : "-25.281961",
          "longitud" : "-57.635261"
          },              {
          "titulo" : "CAJERO AUT. - SUC. CENTRO Nº3",
          "latitud" : "-25.281961",
          "longitud" : "-57.635261"
          },              {
          "titulo" : "CAJERO AUT. - SUC BELLA VISTA",
          "latitud" : "-27.043575",
          "longitud" : "-55.578806"
          },              {
          "titulo" : "CAJERO AUT. - ENCARNACION - N°1",
          "latitud" : "-27.332050",
          "longitud" : "-55.864703"
          },              {
          "titulo" : "CAJERO AUT. - ENCARNACION - N°2",
          "latitud" : "-27.332050",
          "longitud" : "-55.864703"
          },              {
          "titulo" : "CAJERO AUT. - SUC OBLIGADO",
          "latitud" : "-27.061381",
          "longitud" : "-55.634897"
          },              {
          "titulo" : "CAJERO AUT. - MOVIL",
          "latitud" : "-27.332050",
          "longitud" : "-55.864703"
          },              {
          "titulo" : "CAJERO AUT. - ESSO ENCAR. ROTONDA PUENTE MBOIKAE",
          "latitud" : "-27.322494",
          "longitud" : "-55.873514"
          },              {
          "titulo" : "CAJERO AUT. - SUPER. 50 COLONIA INDEPENDENCIA",
          "latitud" : "-25.705642",
          "longitud" : "-56.180228"
          },              {
          "titulo" : "CAJERO AUT. - COPETROL FH (EX CAMPO 9)",
          "latitud" : "-25.377783",
          "longitud" : "-55.720022"
          },              {
          "titulo" : "CAJERO AUT. - SUC. SAN LORENZO",
          "latitud" : "-25.342342",
          "longitud" : "-57.505053"
          },              {
          "titulo" : "CAJERO AUT. - SUC. CDE AREA1 N°3",
          "latitud" : "-25.515881",
          "longitud" : "-54.642808"
          },              {
          "titulo" : "CAJERO AUT. - SHOPPING PLANET-OUTLET PJC",
          "latitud" : "-22.561778",
          "longitud" : "-55.702661"
          },              {
          "titulo" : "CAJERO AUT. - SANATORIO MANUEL RIVEROS CDE",
          "latitud" : "-25.505000",
          "longitud" : "-54.644147"
          },              {
          "titulo" : "CAJERO AUT. - CADENA REAL SAN VICENTE",
          "latitud" : "-25.307867",
          "longitud" : "-57.617278"
          },              {
          "titulo" : "CAJERO AUT. - PUMA POSTA LIMPIO",
          "latitud" : "-25.173953",
          "longitud" : "-57.482917"
          },              {
          "titulo" : "CAJERO AUT. - PUMA POSTA AV. FDO DE LA M.",
          "latitud" : "-25.322242",
          "longitud" : "-57.603142"
          },              {
          "titulo" : "CAJERO AUT. - ATACADOS FORTIS PJC",
          "latitud" : "-22.529906",
          "longitud" : "-55.735917"
          }           ]
    }
  };

  loadAtm(atm_content);
});
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


  </body>
</html>