<?php 
require_once("../conexion/Conexion.php");
class MProducto{

    private $conexion=null;
    private $consulta=null;
    private $stmt=null;
    private $dato=null;

    public function __construct(){      
             
        $this->conexion=((new Conexion())->getConexion());                 
    }

    
    public function listar_poductospordepartamento($depa){

        try {
               
            $prod=null;
            $producto_arreglo=null;
            $this->consulta="CALL RelacionProductosSalida(?,?)";
            $this->stmt=$this->conexion->prepare($this->consulta);
            $this->stmt->bindParam(1,$codEmpresa);
            $this->stmt->bindParam(2,$depa1);
            $codEmpresa=1;
            $depa1 = $depa;            
            $this->stmt->execute();
            
            $this->dato=$this->stmt->fetchAll();
            
            if(sizeof($this->dato)>0){                    
                
                $producto_arreglo=array();

                foreach ($this->dato as $dato) {

                    $prod=new Producto(
                        $dato["codProducto_lista"],
                        $dato["referencia_lista"],
                        $dato["descripcion_lista"],
                        $dato["codUnidadMedida_lista"],
                        $dato["Sigla_lista"],
                        $dato["unidad_lista"],
                        $dato["Precio_lista"],
                        $dato["CantidadVenta_lista"],
                        $dato["tipoImpuesto_lista"],
                        $dato["codTipoArticulo_lista"],
                        $dato["unidadbase_lista"],
                        $dato["PrecioTotal_lista"]                     
                    );
                                     
                   array_push($producto_arreglo,$prod);	
                }
                      
            }       
            $this->stmt->closeCursor();    
          
            return $producto_arreglo;
        
        } catch (exception $e) {
                    
            echo "Error en Operacion: " . $e->getMessage();     
            return $usuario_arreglo;    
        }
    }
}
?>