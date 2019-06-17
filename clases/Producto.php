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

	
	public function setIdproducto($idproducto){
        
        $this->idproducto=$idproducto;
        
	}
	
	public function getIdproducto(){
        
        return $this->idproducto;        
    }

}

?>