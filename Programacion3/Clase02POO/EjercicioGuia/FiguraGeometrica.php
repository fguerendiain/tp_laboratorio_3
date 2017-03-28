<?php

    abstract class FiguraGeometrica
    {
        protected $_color; //string
        protected $_perimetro; //double
        protected $_superficie; //doubleval

        function __construct(){
            $this->_color = "verde";
        }


        abstract protected function CalcularDatos();

        abstract public function Dibujar();

        function GetColor(){
            return $_color;
        }

        function SetColor ($color){
            $_color = $color;
        }

        public function __toString()
        {
            return ("Color: " . $this->_color . "<br>Perimetro: " . $this->_perimetro . "<br>Superficie: " . $this->_superficie);
        }



    }






?>