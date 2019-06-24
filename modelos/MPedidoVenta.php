<?php 
    require_once("../conexion/Conexion.php");

    class MPedidoventa
    {

        private $conexion=null;
        private $consulta=null;
        private $stmt=null;
        private $dato=null;

        public function __construct(){      
                
            $this->conexion=((new Conexion())->getConexion());                 
        }
        
        public function registrar_cliente($cliente,$usuario){

            try {                      
                
                $this->consulta="CALL GuardaCliente(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,@newid)";                         
                $this->stmt=$this->conexion->prepare($this->consulta);
                $this->conexion->beginTransaction();
                $this->stmt->bindParam(1,$codper);          
                $this->stmt->bindParam(2,$codlista);
                $this->stmt->bindParam(3,$codven);
                $this->stmt->bindParam(4,$dni);
                $this->stmt->bindParam(5,$nombre);
                $this->stmt->bindParam(6,$ruc);
                $this->stmt->bindParam(7,$razonsocial);
                $this->stmt->bindParam(8,$direccionlegal);
                $this->stmt->bindParam(9,$direccionentrega);
                $this->stmt->bindParam(10,$telefono);
                $this->stmt->bindParam(11,$email);
                $this->stmt->bindParam(12,$web);
                $this->stmt->bindParam(13,$pais);
                $this->stmt->bindParam(14,$departamento);
                $this->stmt->bindParam(15,$provincia);
                $this->stmt->bindParam(16,$distrito);
                $this->stmt->bindParam(17,$zona);
                $this->stmt->bindParam(18,$descuento);
                $this->stmt->bindParam(19,$formapago);
                $this->stmt->bindParam(20,$moneda);
                $this->stmt->bindParam(21,$lineacredito);
                $this->stmt->bindParam(22,$lineacreditodisponible);
                $this->stmt->bindParam(23,$comentario);
                $this->stmt->bindParam(24,$banco);
                $this->stmt->bindParam(25,$ctacte);
                $this->stmt->bindParam(26,$contacto);
                $this->stmt->bindParam(27,$telefonocontacto);
                $this->stmt->bindParam(28,$calificacion);
                $this->stmt->bindParam(29,$codusu);
                $this->stmt->bindParam(30,$tasa);
                $this->stmt->bindParam(31,$facven);                                   
                
                $codper=null;               
                $codlista=null;     
                $codven=null;  
                $dni=$cliente->getDni();  
                $nombre=$cliente->getNombre();  
                $ruc=$cliente->getRuc();  
                $razonsocial=$cliente->getRazonsocial(); 
                $direccionlegal=$cliente->getDireccionlegal();               
                $direccionentrega=null;     
                $telefono=null;  
                $email=null;  
                $web=null;  
                $pais=null;  
                $departamento=null;
                $provincia=null;               
                $distrito=null;     
                $zona=0;  
                $descuento=0;  
                $formapago=6;  
                $moneda=1;  
                $lineacredito=0.00;
                $lineacreditodisponible=0.00;               
                $comentario=null;     
                $banco=null;  
                $ctacte=null;  
                $contacto=null;  
                $telefonocontacto=null;  
                $calificacion=0; 
                $codusu=$usuario->getIdusuario(); 
                $tasa=0.00; 
                $facven=0;            
                $this->stmt->execute();   
                $this->conexion->commit();                              
                return true;
            
            } catch (exception $e) {                    
                
                $this->conexion->rollback(); 
                echo "Error en Operacion: " . $e->getMessage();     
                return false; 
            }
    
        }

        public function Busca_PedidoVenta($codigopv)
        {
            try {
               
                $pedido=null;
                $this->consulta="CALL MuestraPedido(?)";
                $this->stmt=$this->conexion->prepare($this->consulta);
                $this->stmt->bindParam(1,$codpedido);
                $codpedido = $codigopv;
                
                $this->stmt->execute();
                
                $this->dato=$this->stmt->fetch();
                
                if(sizeof($this->dato)>0){                    
                    
                    $pedido=new PedidoVenta(
                        $this->dato["codSerie"],
                        $this->dato["serie"],
                        $this->dato["numeracion"],
                        $this->dato["nombreimpresora"],
                        $this->dato["papersize"],
                        $this->dato["preimpreso"]
                    );
     				     
                }
                $this->stmt->closeCursor();

            return $ser;
            
            } catch (exception $e) {
                        
                echo "Error en Operacion: " . $e->getMessage();     
                return $ser;
            }
        }
    }
?>