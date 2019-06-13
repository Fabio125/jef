<?php 

include("../clases/Producto.php");
include("../controladores/CProducto.php");

$depa = "F1"; //$_POST["refdepa"];
$arreglo=array();
$cproducto=new CProducto();
$arreglo_productos=$cproducto->listar_poductospordepartamento($depa);

foreach ($arreglo_productos as $producto)
{
    $arreglo[] = [         
        "codigoprod"=>$producto->get$Idproducto(),            
    ];
}
 echo json_encode($arreglo);
 
?>