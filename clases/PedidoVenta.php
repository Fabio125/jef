<?php

	class PedidoVenta
    {
		private $codPedido = null;
		private $codAlmacen = null;
		private $codTipoDocumento = null;
		private $codSerie = null;
		private $serie = null;
		private $numeracion = null;
		private $codCotizacion = null;
		private $codCliente = null;
		private $moneda = null;
		private $tipocambio = null;
		private $fechapedido = null;
		private $gravadas = null;
		private $exoneradas = null
		private $inafectas = null;
		private $gratuitas = null;
		private $bruto = null;
		private $montodscto = null;
		private $igv = null;
		private $total = null;
		private $abonado = null;
		private $pendiente = null;
		private $entregado = null;
		private $formapago = null;
		private $fechapago = null;
		private $fechaEntrega = null;
		private $horaEntrega = null;
		private $nota_comentario = null;
		private $nombreCliente = null;
		private $codUsuario = null;
		private $estado = null;
		private $fecharegistro = null;
		
		public function __construct($codPedido, $codAlmacen, $codTipoDocumento, $numeracion, $papersize, $codCotizacion,
									$codCliente, $moneda, $tipocambio, $fechapedido, $gravadas, $exoneradas, $inafectas, 
									$gratuitas, $bruto, $montodscto, $igv, $total, $abonado, $pendiente, $entregado,
									$formapago, $fechapago, $fechaEntrega, $horaEntrega, $nota_comentario, $nombreCliente, 
									$codUsuario, $estado, $fecharegistro)
        {
            $this->codPedido = $codPedido;
            $this->codAlmacen = $codAlmacen;
            $this->codTipoDocumento = $codTipoDocumento;           
            $this->numeracion = $numeracion;
            $this->papersize = $papersize;
			$this->codCotizacion = $codCotizacion;
			
			$this->codCliente = $codCliente;
            $this->moneda = $moneda;
            $this->tipocambio = $tipocambio;        
            $this->fechapedido = $fechapedido;
            $this->gravadas = $gravadas;
            $this->exoneradas = $exoneradas;
			$this->inafectas = $inafectas;
			
            $this->gratuitas = $gratuitas;
            $this->bruto = $bruto;        
            $this->montodscto = $montodscto;
            $this->igv = $igv;
            $this->total = $total;
			$this->abonado = $abonado;
            $this->pendiente = $pendiente;
            $this->entregado = $entregado;    
			
            $this->formapago = $formapago;
            $this->fechapago = $fechapago;
            $this->fechaEntrega = $fechaEntrega;
			$this->horaEntrega = $horaEntrega;
            $this->nota_comentario = $nota_comentario;
            $this->nombreCliente = $nombreCliente;
			
			$this->codUsuario = $codUsuario;
            $this->estado = $estado;
            $this->fecharegistro = $fecharegistro;
        }
		
		public function setCodPedido($codPedido){ $this->codPedido=$codPedido; }        
        public function getCodPedido(){ return $this->codPedido; }
		
		public function setCodAlmacen($codAlmacen){ $this->codAlmacen=$codAlmacen; }        
        public function getCodAlmacen(){ return $this->codAlmacen; }
		
		public function setCodTipoDocumento($codTipoDocumento){ $this->codTipoDocumento=$codTipoDocumento; }        
        public function getCodTipoDocumento(){ return $this->codTipoDocumento; }
		
		public function setNumeracion($numeracion){ $this->numeracion=$numeracion; }        
        public function getNumeracion(){ return $this->numeracion; }
		
		public function setPapersize($papersize){ $this->papersize=$papersize; }        
        public function getPapersize(){ return $this->papersize; }
		
		public function setCodCotizacion($codCotizacion){ $this->codCotizacion=$codCotizacion; }        
        public function getCodCotizacion(){ return $this->codCotizacion; }
		
		public function setCodCliente($codCliente){ $this->codCliente=$codCliente; }        
        public function getCodCliente(){ return $this->codCliente; }
		
		public function setMoneda($moneda){ $this->moneda=$moneda; }        
        public function getMoneda(){ return $this->moneda; }
		
		public function setTipocambio($tipocambio){ $this->tipocambio=$tipocambio; }        
        public function getTipocambio(){ return $this->tipocambio; }
		
		public function setFechapedido($fechapedido){ $this->fechapedido=$fechapedido; }        
        public function getFechapedido(){ return $this->fechapedido; }
		
		public function setGravadas($gravadas){ $this->gravadas=$gravadas; }        
        public function getGravadas(){ return $this->gravadas; }
		
		public function setExoneradas($exoneradas){ $this->exoneradas=$exoneradas; }        
        public function getExoneradas(){ return $this->exoneradas; }
		
		public function setInafectas($inafectas){ $this->inafectas=$inafectas; }        
        public function getInafectas(){ return $this->inafectas; }
		
		public function setGratuitas($gratuitas){ $this->gratuitas=$gratuitas; }        
        public function getGratuitas(){ return $this->gratuitas; }
		
		public function setBruto($bruto){ $this->bruto=$bruto; }        
        public function getBruto(){ return $this->bruto; }
		
		public function setMontodscto($montodscto){ $this->montodscto=$montodscto; }        
        public function getMontodscto(){ return $this->montodscto; }
		
		public function setIgv($igv){ $this->igv=$igv; }        
        public function getIgv(){ return $this->igv; }
		
		public function setTotal($total){ $this->total=$total; }        
        public function getTotal(){ return $this->total; }
		
		public function setAbonado($abonado){ $this->abonado=$abonado; }        
        public function getAbonado(){ return $this->abonado; }
		
		public function setPendiente($pendiente){ $this->pendiente=$pendiente; }        
        public function getPendiente(){ return $this->pendiente; }
		
		public function setEntregado($entregado){ $this->entregado=$entregado; }        
        public function getEntregado(){ return $this->entregado; }
		
		public function setFormapago($formapago){ $this->formapago=$formapago; }        
        public function getFormapago(){ return $this->formapago; }
		
		public function setFechapago($fechapago){ $this->fechapago=$fechapago; }        
        public function getFechapago(){ return $this->fechapago; }
		
		public function setFechaEntrega($fechaEntrega){ $this->fechaEntrega=$fechaEntrega; }        
        public function getFechaEntrega(){ return $this->fechaEntrega; }
		
		public function setHoraEntrega($horaEntrega){ $this->horaEntrega=$horaEntrega; }        
        public function getHoraEntrega(){ return $this->horaEntrega; }
		
		public function setNota_comentario($nota_comentario){ $this->nota_comentario=$nota_comentario; }        
        public function getNota_comentario(){ return $this->nota_comentario; }
		
		public function setNombreCliente($nombreCliente){ $this->nombreCliente=$nombreCliente; }        
        public function getNombreCliente(){ return $this->nombreCliente; }
		
		public function setCodUsuario($codUsuario){ $this->codUsuario=$codUsuario; }        
        public function getCodUsuario(){ return $this->codUsuario; }
		
		public function setEstado($estado){ $this->estado=$estado; }        
        public function getEstado(){ return $this->estado; }
		
		public function setFecharegistro($fecharegistro){ $this->fecharegistro=$fecharegistro; }        
        public function getFecharegistro(){ return $this->fecharegistro; }
	}

?>