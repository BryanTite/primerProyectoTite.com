<?php

    class Pedido{

        protected $producto;
        protected $cantidad = 1;

        public function __construct($producto){
            $this->producto = $producto;
        }

         
        public function getProducto()
        {
            return $this->producto;
        }

        public function setProducto($producto)
        {
            $this->producto = $producto;
        }


        public function getCantidad()
        {
            return $this->cantidad;
        }

 
        public function setCantidad($cantidad)
        {
            $this->cantidad = $cantidad;

        }
    }
        

?>