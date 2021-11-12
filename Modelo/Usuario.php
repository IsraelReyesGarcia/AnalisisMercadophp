<?php 
    class Usuario{
        public $nombre;
        public $idioma;
        public $region;
        public $producto;
        public $mercado;
        public $idMercado;

        public function __construct($nombre,$idioma,$region,$producto,$mercado,$idMercado){
            $this->nombre = $nombre;
            $this->idioma = $idioma;
            $this->region = $region;
            $this->producto = $producto;
            $this->mercado = $mercado;
            $this->idMercado = $idMercado;
        }
    

        public function setNombre($nombre){
            $this->nombre=$nombre;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function setIdioma($idioma){
            $this->idioma=$idioma;
        }

        public function getIdioma(){
            return $this->idioma;
        }

        public function setRegion($region){
            $this->region=$region;
        }

        public function getRegion(){
            return $this->region;
        }

        public function setProducto($producto){
            $this->producto=$producto;
        }

        public function getProducto(){
            return $this->producto;
        }

        public function setMercado($mercado){
            $this->mercado=$mercado;
        }

        public function getMercado(){
            return $this->mercado;
        }
        public function setIdMercado($idMercado){
            $this->idMercado=$idMercado;
        }

        public function getIdMercado(){
            return $this->idMercado;
        }

    }


?>