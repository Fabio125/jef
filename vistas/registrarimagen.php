<?php
include("../clases/Usuario.php");
include("../clases/Imagen.php");
include("../controladores/CImagen.php");

session_start();

$arreglo=null;
$usuario = $_SESSION["usuario"];
$nombrearchivo=/*hash('sha512',*/ $_FILES["file"]["name"];
$nombre=$_POST["nombre"];
$ruta="\\disenho\\";
$ruta=dirname( __FILE__ ).$ruta.$nombrearchivo;
$codigo=$nombre;//$_POST["codigo"];
$idimagen=-1;
$imagen=null;
$cimagen=null;
$imagen=new Imagen(null,$nombre,getBaseUrl()."disenho/".$nombrearchivo,$codigo,$usuario, null);
$cimagen=new CImagen();
$idimagen=$cimagen->Sp_registrarimagen($imagen);

if($idimagen>0){

    $subir=move_uploaded_file($_FILES["file"]["tmp_name"],$ruta);
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

function getBaseUrl() 
{
    // output: /myproject/index.php
    $currentPath = $_SERVER['PHP_SELF']; 
    
    // output: Array ( [dirname] => /myproject [basename] => index.php [extension] => php [filename] => index ) 
    $pathInfo = pathinfo($currentPath); 
    
    // output: localhost
    $hostName = $_SERVER['HTTP_HOST']; 
    
    // output: http://
    $protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,5))=='https://'?'https://':'http://';
    
    // return: http://localhost/myproject/
    return $protocol.$hostName.$pathInfo['dirname']."/";
}

?>