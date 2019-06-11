<?php 

include("../clases/TipoUsuario.php");
include("../clases/Usuario.php");
include("../controladores/CUsuario.php");

$cuenta=$_POST["cuenta"];
$clave=$_POST["clave"];

$arreglo=array();
$cusuario=new CUsuario();
$usuario=$cusuario->buscar_usuarioxcuentaclave(new Usuario(
    null,
    null,
    null,
    null,
    null,
    $cuenta,
    $clave,
    null
));

if($usuario!=null){

    $arreglo[] = [         
            "idusuario"=>$usuario->getIdusuario(),
            "cuenta"=>$usuario->getCuenta(),     
            "clave"  =>$usuario->getClave(),
    ];

    session_start();
    $_SESSION["usuario"]=$usuario;
    
}else{

    $arreglo=null;
}

 echo json_encode($arreglo);
 
?>
