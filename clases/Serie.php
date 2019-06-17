<?php

    class Serie
    {
        private $idserie=null;
        private $serie=null;
        private $numeracion=null;
        private $nombreimpresora= null;
        private $papersize=null;
        private $preimpreso=null;
        
    

        public function __construct($idserie,$serie,$numeracion,$nombreimpresora,$papersize,$preimpreso)
        {

            $this->idserie=$idserie;
            $this->serie=$serie;
            $this->numeracion=$numeracion;        
            $this->nombreimpresora=$nombreimpresora;
            $this->papersize=$papersize;
            $this->preimpreso=$preimpreso;

        }
        
        public function setIdserie($idserie){
            
            $this->idserie=$idserie;
            
        }
        
        public function getIdserie(){
            
            return $this->idserie;        
        }

        public function setSerie($serie){
            
            $this->serie=$serie;
            
        }
        
        public function getSerie(){
            
            return $this->serie;        
        }

        public function setNumeracion($numeracion){
            
            $this->numeracion=$numeracion;
            
        }
        
        public function getNumeracion(){
            
            return $this->numeracion;        
        }

        public function setNombreimpresora($nombreimpresora){
            
            $this->nombreimpresora=$nombreimpresora;
            
        }
        
        public function getNombreimpresora(){
            
            return $this->nombreimpresora;        
        }

        public function setPapersize($papersize){
            
            $this->papersize=$papersize;
            
        }
        
        public function getPapersize(){
            
            return $this->papersize;        
        }

        public function setPreimpreso($preimpreso){
            
            $this->preimpreso=$preimpreso;
            
        }
        
        public function getPreimpreso(){
            
            return $this->preimpreso;        
        }

}

?>