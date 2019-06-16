<?php
class Cliente{

    private $idcliente=null;
    private $nombre=null;
    private $dni=null;
    private $razonsocial=null;
    private $ruc=null;
    private $direccionlegal=null;

    public function __construct($idcliente,$nombre,$dni,$razonsocial,$ruc, $direccionlegal){

        $this->idcliente=$idcliente;
        $this->nombre=$nombre;
        $this->dni=$dni;
        $this->razonsocial=$razonsocial;
        $this->ruc=$ruc;
        $this->direccionlegal=$direccionlegal;
    }
    /**
     * Get the value of idcliente
     */ 
    public function getIdcliente()
    {
        return $this->idcliente;
    }

    /**
     * Set the value of idcliente
     *
     * @return  self
     */ 
    public function setIdcliente($idcliente)
    {
        $this->idcliente = $idcliente;

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
     * Get the value of dni
     */ 
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * Set the value of dni
     *
     * @return  self
     */ 
    public function setDni($dni)
    {
        $this->dni = $dni;

        return $this;
    }

    /**
     * Get the value of razonsocial
     */ 
    public function getRazonsocial()
    {
        return $this->razonsocial;
    }

    /**
     * Set the value of razonsocial
     *
     * @return  self
     */ 
    public function setRazonsocial($razonsocial)
    {
        $this->razonsocial = $razonsocial;

        return $this;
    }

    /**
     * Get the value of ruc
     */ 
    public function getRuc()
    {
        return $this->ruc;
    }

    /**
     * Set the value of ruc
     *
     * @return  self
     */ 
    public function setRuc($ruc)
    {
        $this->ruc = $ruc;

        return $this;
    }

    /**
     * Get the value of direccionlegal
     */ 
    public function getDireccionlegal()
    {
        return $this->direccionlegal;
    }

    /**
     * Set the value of direccionlegal
     *
     * @return  self
     */ 
    public function setDireccionlegal($direccionlegal)
    {
        $this->direccionlegal = $direccionlegal;

        return $this;
    }
}
?>