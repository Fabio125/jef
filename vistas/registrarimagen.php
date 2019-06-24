<?php
include("../clases/Usuario.php");
include("../clases/Imagen.php");
 include("../controladores/CImagen.php");

session_start();
$arreglo=null;
$usuario = $_SESSION["usuario"];
$nombrearchivo=$_FILES["img"]["name"];
$nombre=$_POST["nombre"];
$ruta="\\disenho\\";
$ruta=dirname( __FILE__ ).$ruta.$nombrearchivo;
$codigo=$_POST["codigo"];
$idimagen=-1;
$imagen=null;
$cimagen=null;
$imagen=new Imagen(null,$nombre,$ruta,$codigo,$usuario, null);
$cimagen=new CImagen();
$idimagen=$cimagen->Sp_registrarimagen($imagen);

if($idimagen>0){

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