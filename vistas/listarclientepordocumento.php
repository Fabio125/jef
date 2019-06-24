<?php

header('Content-Type: text/plain');

require ("../src/autoload.php");    
include("../clases/Cliente.php");
include("../controladores/CCliente.php");

$ndocumento="10454729485";//$_POST["documento"];
$arreglo=array();
$ccliente=new CCliente();
$cliente=$ccliente->buscar_clientexndocumento($ndocumento);

if($cliente->getIdcliente()==null){
    
    if(strlen($ndocumento)==11)
    {
        $company = new \Sunat\Sunat( true, true );       
        $arreglo_busqueda = $company->search( $ndocumento );   
        print_r($arreglo_busqueda);
    }

}else{

}

/*foreach ($arreglo_usuario as $usuario)
{
    $arreglo[] = [         
        "cuenta"=>$usuario->getCuenta(),            
    ];
}*/
 //echo json_encode($arreglo);


?>