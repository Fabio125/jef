<?php 

include("../clases/TipoUsuario.php");
include("../clases/Usuario.php");
include("../controladores/CUsuario.php");

$arreglo=array();
$cusuario=new CUsuario();
$arreglo_usuario=$cusuario->listar_usuarioxempresa();

foreach ($arreglo_usuario as $usuario)
{
    $arreglo[] = [         
        "cuenta"=>$usuario->getCuenta(),            
    ];
}
 echo json_encode($arreglo);
 
?>