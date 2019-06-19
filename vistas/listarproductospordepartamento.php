<?php 

include("../clases/Producto.php");
include("../controladores/CProducto.php");

$depa =$_GET["refdepa"];
$cproducto=new CProducto();
<<<<<<< HEAD:vistas/listarproductospordepartamento.php
$arreglo_productos=$cproducto->listar_productospordepartamento($depa);

 $i=0;
foreach ($arreglo_productos as $producto)
{
   
    $variable[$i][]=$producto->getIdproducto();
    $variable[$i][]=$producto->getReferencia();
    $variable[$i][]=$producto->getDescripcion();
    $variable[$i][]=$producto->getIdunidadmedida();
    $variable[$i][]=$producto->getDescripcionunidad();
    $variable[$i][]=$producto->getSiglaunidad();
    $variable[$i][]=$producto->getPrecio();
    $variable[$i][]='<input type="number" id="cantidad" data-id-precio="'.$producto->getPrecio().'" value="0" min="1" max="1000" step="1"/>';
    $variable[$i][]=$producto->getTipoimpuesto();
    $variable[$i][]=$producto->getTipoarticulo();
    $variable[$i][]=$producto->getIdunidadbase();
    $variable[$i][]=$producto->getTotal();
    $variable[$i][]='<button class="btn btn-outline btn-info  dim" type="button"><i class="fa fa-save"></i> </button>';
=======
$arreglo_productos=$cproducto->listar_poductospordepartamento($depa);
$variable = array();
$i=0;
>>>>>>> Erwin:vistas/listarpoductospordepartamento.php

if(count($arreglo_productos)>0){
    foreach ($arreglo_productos as $producto)
    {
    
        $variable[$i][]=$producto->getIdproducto();
        $variable[$i][]=$producto->getReferencia();
        $variable[$i][]=$producto->getDescripcion();
        $variable[$i][]=$producto->getIdunidadmedida();
        $variable[$i][]=$producto->getDescripcionunidad();
        $variable[$i][]=$producto->getSiglaunidad();
        $variable[$i][]=$producto->getPrecio();
        $variable[$i][]='<input type="number" id="cantidad" data-id-precio="'.$producto->getPrecio().'" value="0" min="1" max="1000" step="1"/>';
        $variable[$i][]=$producto->getTipoimpuesto();
        $variable[$i][]=$producto->getTipoarticulo();
        $variable[$i][]=$producto->getIdunidadbase();
        $variable[$i][]=$producto->getTotal();
        $variable[$i][]='<button class="btn btn-outline btn-info  dim" type="button"><i class="fa fa-save"></i> </button>';

        $i++;
    }
}
$total['aaData']=$variable;
echo json_encode($total);

?>