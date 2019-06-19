<?php
include("../src/simple_html_dom.php");

$dni ="45472948 ";// $_POST['dni'];
 
//OBTENEMOS EL VALOR
$consulta = file_get_html('http://aplicaciones007.jne.gob.pe/srop_publico/Consulta/Afiliado/GetNombresCiudadano?DNI='.$dni)->plaintext;
 
//LA LOGICA DE LA PAGINAS ES APELLIDO PATERNO | APELLIDO MATERNO | NOMBRES
 
$partes = explode("|", $consulta);
 
$datos = array(
0 => $dni,
1 => $partes[0],
2 => $partes[1],
3 => $partes[2],
);
 
print_r($datos);
//echo json_encode($datos);
?>