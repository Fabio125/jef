<?php 

class Producto {

    private $idproducto=null;
    private $referencia=null;
    private $descripcion=null;
    private $idunidadmedida= null;
    private $siglaunidad=null;
    private $descripcionunidad=null;
    private $precio=null;
    private $cantidad=null;
    private $tipoimpuesto=null;
    private $tipoarticulo=null;
    private $idunidadbase=null;
    private $total=null;

    public function __construct($idproducto,$referencia,$descripcion,$idunidadmedida,$siglaunidad,$descripcionunidad,$precio,$cantidad,$tipoimpuesto,$tipoarticulo,$idunidadbase,$total){

        $this->idproducto=$idproducto;
        $this->referencia=$referencia;
        $this->descripcion=$descripcion;        
        $this->idunidadmedida=$idunidadmedida;
        $this->siglaunidad=$siglaunidad;
        $this->descripcionunidad=$descripcionunidad;
        $this->precio=$precio;
        $this->cantidad=$cantidad;
        $this->tipoimpuesto=$tipoimpuesto;
        $this->tipoarticulo=$tipoarticulo;
        $this->idunidadbase=$idunidadbase;
        $this->total=$total;

	}
	
	

        

    /**
     * Get the value of idproducto
     */ 
    public function getIdproducto()
    {
        return $this->idproducto;
    }

    /**
     * Set the value of idproducto
     *
     * @return  self
     */ 
    public function setIdproducto($idproducto)
    {
        $this->idproducto = $idproducto;

        return $this;
    }

    /**
     * Get the value of referencia
     */ 
    public function getReferencia()
    {
        return $this->referencia;
    }

    /**
     * Set the value of referencia
     *
     * @return  self
     */ 
    public function setReferencia($referencia)
    {
        $this->referencia = $referencia;

        return $this;
    }

    /**
     * Get the value of descripcion
     */ 
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set the value of descripcion
     *
     * @return  self
     */ 
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get the value of idunidadmedida
     */ 
    public function getIdunidadmedida()
    {
        return $this->idunidadmedida;
    }

    /**
     * Set the value of idunidadmedida
     *
     * @return  self
     */ 
    public function setIdunidadmedida($idunidadmedida)
    {
        $this->idunidadmedida = $idunidadmedida;

        return $this;
    }

    /**
     * Get the value of siglaunidad
     */ 
    public function getSiglaunidad()
    {
        return $this->siglaunidad;
    }

    /**
     * Set the value of siglaunidad
     *
     * @return  self
     */ 
    public function setSiglaunidad($siglaunidad)
    {
        $this->siglaunidad = $siglaunidad;

        return $this;
    }

    /**
     * Get the value of descripcionunidad
     */ 
    public function getDescripcionunidad()
    {
        return $this->descripcionunidad;
    }

    /**
     * Set the value of descripcionunidad
     *
     * @return  self
     */ 
    public function setDescripcionunidad($descripcionunidad)
    {
        $this->descripcionunidad = $descripcionunidad;

        return $this;
    }

    /**
     * Get the value of precio
     */ 
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set the value of precio
     *
     * @return  self
     */ 
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get the value of cantidad
     */ 
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set the value of cantidad
     *
     * @return  self
     */ 
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get the value of tipoimpuesto
     */ 
    public function getTipoimpuesto()
    {
        return $this->tipoimpuesto;
    }

    /**
     * Set the value of tipoimpuesto
     *
     * @return  self
     */ 
    public function setTipoimpuesto($tipoimpuesto)
    {
        $this->tipoimpuesto = $tipoimpuesto;

        return $this;
    }

    /**
     * Get the value of tipoarticulo
     */ 
    public function getTipoarticulo()
    {
        return $this->tipoarticulo;
    }

    /**
     * Set the value of tipoarticulo
     *
     * @return  self
     */ 
    public function setTipoarticulo($tipoarticulo)
    {
        $this->tipoarticulo = $tipoarticulo;

        return $this;
    }

    /**
     * Get the value of idunidadbase
     */ 
    public function getIdunidadbase()
    {
        return $this->idunidadbase;
    }

    /**
     * Set the value of idunidadbase
     *
     * @return  self
     */ 
    public function setIdunidadbase($idunidadbase)
    {
        $this->idunidadbase = $idunidadbase;

        return $this;
    }

    /**
     * Get the value of total
     */ 
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set the value of total
     *
     * @return  self
     */ 
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }
}

?>