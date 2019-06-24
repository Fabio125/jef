<?php 
require_once("../modelos/MPedidoVenta.php");
require_once("../clases/PedidoVenta.php");

class CPedidoVenta
{

    private $mpedido=null;

    public function __construct(){

        $this->mpedido=new MSerie();
    }

    public function Registrar_PedidoVenta($Pedido)
    {
        try {
        
                return  $this->mpedido->Guarda_PedidoVenta($Pedido);
      
        } catch (Exception $e) {
       
            die("Error de Conexion: " .$e->getMessage());  
            return null;                   
        }
    }
    

    public function Busca_PedidoVenta($codigopv, $codigoalma)
    {
        try {
        
                return  $this->mpedido->Busca_PedidoVenta($codigopv, $codigoalma);
      
        } catch (Exception $e) {
       
            die("Error de Conexion: " .$e->getMessage());  
            return null;                   
        }
    }


}
?>