<?php
require_once("../conexion/Conexion.php");
class MImagen{

    private $conexion=null;
    private $consulta=null;
    private $stmt=null;
    private $dato=null;

    public function __construct(){      
             
        $this->conexion=((new Conexion())->getConexion());                 
    }

    public function Sp_registrarimagen($imagen){

        try {
               
            $idcliente=-1;
            $this->consulta="CALL Sp_registrarimagen(?,?,?,?)";
            $this->stmt=$this->conexion->prepare($this->consulta);
            $this->stmt->bindParam(1,$_nombre);          
            $this->stmt->bindParam(2,$_ruta);   
            $this->stmt->bindParam(3,$_codigo);   
            $this->stmt->bindParam(4,$_idusuario);   
            $_nombre=$imagen->getNombre();  
            $_ruta=$imagen->getRuta();
            $_codigo=$imagen->getCodigo();   
            $_idusuario=$imagen->getUsuario()->getIdusuario();           
            $this->stmt->execute();
            
            $this->dato=$this->stmt->fetch();
            
            if(sizeof($this->dato)>0){                    
                
                $idcliente=$this->dato["_id"] ;                      
            }
            $this->stmt->closeCursor();

            return $idcliente;
        
        } catch (exception $e) {
                    
            echo "Error en Operacion: " . $e->getMessage();     
            return $idcliente;  
        }

    }

    public function Sp_actualizarimagen($imagen){

        try {
               
            $filas_afectadas=-1;
            $this->consulta="CALL Sp_actualizarimagen(?,?,?,?,?)";
            $this->stmt=$this->conexion->prepare($this->consulta);
            $this->stmt->bindParam(1,$_idimagen);          
            $this->stmt->bindParam(2,$_nombre);   
            $this->stmt->bindParam(3,$_ruta);   
            $this->stmt->bindParam(4,$_codigo);   
            $this->stmt->bindParam(5,$_estado);   
            $_idimagen=$imagen->getIdimagen();  
            $_nombre=$imagen->getNombre();  
            $_ruta=$imagen->getRuta();
            $_codigo=$imagen->getCodigo();   
            $_estado=$imagen->getEstado();           
            $this->stmt->execute();
            
            $this->dato=$this->stmt->fetch();
            
            if(sizeof($this->dato)>0){                    
                
                $filas_afectadas=$this->dato["_filas_afectadas"] ;                      
            }
            $this->stmt->closeCursor();

            return $filas_afectadas;
        
        } catch (exception $e) {
                    
            echo "Error en Operacion: " . $e->getMessage();     
            return $filas_afectadas;  
        }
    }
    
    public function Sp_listarimagen_xestado(){

        try {
               
            $imagen=null;
            $imagen_arreglo=null;
            $this->consulta="CALL Sp_listarimagen_xestado()";
            $this->stmt=$this->conexion->prepare($this->consulta);                     
            $this->stmt->execute();
            
            $this->dato=$this->stmt->fetchAll();
            
            if(sizeof($this->dato)>0){                    
                
                $imagen_arreglo=array();

                foreach ($this->dato as $dato) {

                    $imagen=new Imagen(
                        $dato["idimagen"],
                        $dato["nombre"],
                        $dato["ruta"],
                        $dato["codigo"],
                        null,
                        $dato["estado"]                
                    );
                                     
                   array_push($imagen_arreglo,$imagen);	
                }
                      
            }       
            $this->stmt->closeCursor();    
          
            return $imagen_arreglo;
        
        } catch (exception $e) {
                    
            echo "Error en Operacion: " . $e->getMessage();     
            return $imagen_arreglo;
     
        }
    }

    public function Sp_listarimagen_xid($idimagen){

        try {
               
            $imagen=null;
            $this->consulta="CALL Sp_listarimagen_xid(?)";
            $this->stmt=$this->conexion->prepare($this->consulta);
            $this->stmt->bindParam(1,$_idimagen);          
            $_idimagen=$idimagen;               
            $this->stmt->execute();

            $this->dato=$this->stmt->fetch();
            
            if(sizeof($this->dato)>0){                    
                
                $imagen=new Imagen(
                    $this->dato["idimagen"],
                    $this->dato["nombre"],
                    $this->dato["ruta"],
                    $this->dato["codigo"],
                    null,
                    $this->dato["estado"] 

                );                      
            }
            $this->stmt->closeCursor();

            return $imagen;
        
        } catch (exception $e) {
                    
            echo "Error en Operacion: " . $e->getMessage();     
            return $imagen;  
        }
    }
}
?>