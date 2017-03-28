<?php
    require "FiguraGeometrica.php";
    class Rectangulo extends FiguraGeometrica
    {

        private $_ladoUno;
        private $_ladoDos;

        public function __construct($doubleL1,$doubleL2){
            parent::__construct();
            $this->_ladoUno = $doubleL1;
            $this->_ladoDos = $doubleL2;
            $this->CalcularDatos();
            echo $this;
        }
        
        function CalcularDatos()
        {
            $this->_perimetro = (($this->_ladoUno*2)+($this->_ladoDos*2));
            $this->_superficie = ($this->_ladoUno * $this->_ladoDos);
        }

        public function Dibujar(){
            for($i = 0; $i < $this->_ladoUno; $i++)
            {
                for($j = 0; $j < $this->_ladoDos; $j++)
                {
                    echo ("*");
                }
                echo("<br>");
            }

        }

        public function __toString(){
            return "Lado Uno : " . $this->_ladoUno . "<br>Lado Dos : " . $this->_ladoDos . "<br>" . parent::__toString() . "<br>";
        }
}


?>