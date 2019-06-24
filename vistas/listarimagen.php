<?php
include("../clases/Imagen.php");
include("../controladores/CImagen.php");

$cimagen=null;
$cimagen=new CImagen();
$arreglo_imagen=$cimagen->Sp_listarimagen_xestado();
$arreglo=null;

if(sizeof($arreglo_imagen)>0){

    $arreglo=array();

    foreach($arreglo_imagen as $imagen){

        $arreglo[]=[
                "idimagen" => $imagen->getIdimagen(),
                "nombre"=> $imagen->getNombre(),
                "ruta"=> $imagen->getRuta(),
                "codigo"=> $imagen->getCodigo()
        ];
    }
}

echo json_encode($arreglo);
?>