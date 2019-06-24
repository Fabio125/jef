<?php

header('Content-Type: text/plain');

require ("../src/autoload.php");    
include("../clases/Cliente.php");
include("../controladores/CCliente.php");

session_start();

$usuario=$_SESSION["usuario"];
$correcto=null;
$empresa=null;
$cliente=null;
$ndocumento=$_POST["documento"];
$arreglo=null;
$ccliente=new CCliente();
$cliente=$ccliente->buscar_clientexndocumento($ndocumento);

if($cliente->getIdcliente()==null){
    
    if(strlen($ndocumento)==11)
    {
        $company = new \Sunat\Sunat( true, true );       
        $arreglo_busqueda = $company->search( $ndocumento );   
        print_r($arreglo_busqueda);
    }

        $servicio = @file_get_html("http://aplicaciones007.jne.gob.pe/srop_publico/Consulta/Afiliado/GetNombresCiudadano?DNI=".$ndocumento)->plaintext;
     
        if($servicio!=null){

            if(strpos($servicio,"|")){

                $datos = explode("|", $servicio);

                $cliente=new Cliente(
                    null,
                    $datos[2]." ".$datos[0]." ".$datos[1],
                    $ndocumento,
                    $datos[2]." ".$datos[0]." ".$datos[1],
                    '',
                    '-'
                 );    
                 
                 $correcto=$ccliente->registrar_cliente($cliente, $usuario);

                if($correcto){

                    $cliente=$ccliente->buscar_clientexndocumento($ndocumento);
                    $arreglo=array();
                    $arreglo[] = [         
                        "codcliente"=>$cliente->getIdcliente(),        
                        "nombre"=>$cliente->getNombre(), 
                        "dni"=>$cliente->getDni(), 
                        "razonsocial"=>$cliente->getRazonsocial(), 
                        "ruc"=>$cliente->getRuc(),
                        "direccion"=>$cliente-> getDireccionlegal()
                    ];
                }
            }
        }    
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