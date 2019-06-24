<?php
class Imagen{

    private $idimagen=null;
    private $nombre=null;
    private $ruta=null;
    private $codigo=null;
    private $usuario=null;
    private $estado=null;

    public function __construct($idimagen,$nombre,$ruta,$codigo,$usuario, $estado){

        $this->idimagen=$idimagen;
        $this->nombre=$nombre;
        $this->ruta=$ruta;
        $this->codigo=$codigo;
        $this->usuario=$usuario;
        $this->estado=$estado;
    }

    /**
     * Get the value of idimagen
     */ 
    public function getIdimagen()
    {
        return $this->idimagen;
    }

    /**
     * Set the value of idimagen
     *
     * @return  self
     */ 
    public function setIdimagen($idimagen)
    {
        $this->idimagen = $idimagen;

        return $this;
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of ruta
     */ 
    public function getRuta()
    {
        return $this->ruta;
    }

    /**
     * Set the value of ruta
     *
     * @return  self
     */ 
    public function setRuta($ruta)
    {
        $this->ruta = $ruta;

        return $this;
    }

    /**
     * Get the value of codigo
     */ 
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set the value of codigo
     *
     * @return  self
     */ 
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get the value of usuario
     */ 
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set the value of usuario
     *
     * @return  self
     */ 
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get the value of estado
     */ 
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set the value of estado
     *
     * @return  self
     */ 
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }
}
?>