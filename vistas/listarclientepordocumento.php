<?php
header('Content-Type: text/plain');
require ("../src/autoload.php");    
include("../clases/Usuario.php");
include("../clases/Cliente.php");
include("../controladores/CCliente.php");
include("../src/simple_html_dom.php");

session_start();

$usuario=$_SESSION["usuario"];
$correcto=null;
$empresa=null;
$cliente=null;
$ndocumento="45472948";//$_POST["documento"];
$arreglo=null;
$ccliente=new CCliente();
$cliente=$ccliente->buscar_clientexndocumento($ndocumento);

if($cliente->getIdcliente()==null){
    
    if(strlen($ndocumento)==11)
    {
        $empresa = new \Sunat\Sunat( true, true );       
        $busqueda = $empresa->search( $ndocumento );   

        if($busqueda->success){

            $cliente=new Cliente(
               null,
               $busqueda->result->razon_social,
               '',
               $busqueda->result->razon_social,
               $busqueda->result->ruc,
               $busqueda->result->direccion
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
    else if(strlen($ndocumento)==8){

        $servicio = @file_get_html('http://aplicaciones007.jne.gob.pe/srop_publico/Consulta/Afiliado/GetNombresCiudadano?DNI='.$ndocumento)->plaintext;

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

print_r($arreglo);
 //echo json_encode($arreglo);

?>