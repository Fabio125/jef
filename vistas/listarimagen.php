<?php
include("../clases/Imagen.php");
include("../controladores/CImagen.php");

$cimagen=null;
$cimagen=new CImagen();
$arreglo_imagen=$cimagen->Sp_listarimagen_xestado();
$arreglo=null;

if(sizeof($arreglo_imagen)>0){

    $arreglo=array();
    $i=0;
    foreach($arreglo_imagen as $imagen){
        $variable[$i][]=$imagen->getIdimagen();
        $variable[$i][]=$imagen->getNombre();
        $variable[$i][]=$imagen->getRuta();//'<img src="'.$imagen->getRuta().'"> ';
        $variable[$i][]='';
        $i++;
    }
}

$total['aaData']=$variable;
echo json_encode($total);
?>