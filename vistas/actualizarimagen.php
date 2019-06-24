<?php
include("../clases/Imagen.php");
include("../controladores/CImagen.php");

$arreglo=null;
$nombrearchivo=$_FILES["img"]["name"];
$idimagen=$_POST["idimagen"];
$nombre=$_POST["nombre"];
$ruta="\\disenho\\";
$ruta=dirname( __FILE__ ).$ruta.$nombrearchivo;
$codigo=$_POST["codigo"];
$estado=$_POST["estado"];
$filas_afectadas=-1;
$imagen=null;
$cimagen=null;
$imagen=new Imagen($idimagen,$nombre,$ruta,$codigo,null, $estado);
$cimagen=new CImagen();
$filas_afectadas=$cimagen->Sp_actualizarimagen($imagen);

if($filas_afectadas>0){

    $subir=move_uploaded_file($_FILES["img"]["tmp_name"],$ruta);
    
    if($subir){ 

            $imagen=$cimagen->Sp_listarimagen_xid($idimagen);    
            $arreglo=array();
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