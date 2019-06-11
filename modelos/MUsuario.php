<?php 
require_once("../conexion/Conexion.php");
class MUsuario{

    private $conexion=null;
    private $consulta=null;
    private $stmt=null;
    private $dato=null;

    public function __construct(){      
             
        $this->conexion=((new Conexion())->getConexion());                 
    }

    public function buscar_usuarioxcuentaclave($usuario){

        try {
               
                $usu=null;
                $this->consulta="CALL Login(?,?,?,?)";
                $this->stmt=$this->conexion->prepare($this->consulta);
                $this->stmt->bindParam(1,$usua);
                $this->stmt->bindParam(2,$contra);
                $this->stmt->bindParam(3,$niv);
                $this->stmt->bindParam(4,$empre);
                $usua=$usuario->getCuenta();
                $contra=$usuario->getClave();
                $niv=5;
                $empre=1;
                $this->stmt->execute();
                
                $this->dato=$this->stmt->fetch();
                
                if(sizeof($this->dato)>0){                    
                    
                    $usu=new Usuario(
                        $this->dato["codUsuario"],
                        null,
                        null,
                        null,
                        null,
                        $usuario->getCuenta(),
                        $usuario->getClave(),
                        null
                    );
     				     
                }
                $this->stmt->closeCursor();

            return $usu;
            
        } catch (exception $e) {
                    
            echo "Error en Operacion: " . $e->getMessage();     
            return $usu;    
        }
    }

    public function listar_usuarioxempresa(){

        try {
               
            $usu=null;
            $usuario_arreglo=null;
            $this->consulta="CALL ListaUsuarios_Empresa(?)";
            $this->stmt=$this->conexion->prepare($this->consulta);
            $this->stmt->bindParam(1,$codEmpresa);
            $codEmpresa=1;            
            $this->stmt->execute();
            
            $this->dato=$this->stmt->fetchAll();
            
            if(sizeof($this->dato)>0){                    
                
                $usuario_arreglo=array();

                foreach ($this->dato as $dato) {

                    $usu=new Usuario(
                        null,
                        null,
                        null,
                        null,
                        null,
                        $dato["usuario"],
                        null,
                        null                      
                    );
                                     
                   array_push($usuario_arreglo,$usu);	
                }
                      
            }       
            $this->stmt->closeCursor();    
          
            return $usuario_arreglo;
        
        } catch (exception $e) {
                    
            echo "Error en Operacion: " . $e->getMessage();     
            return $usuario_arreglo;    
        }
    }
}
?>