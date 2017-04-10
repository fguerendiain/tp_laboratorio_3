<?php
    include_once "persona.php";
    class Empleado extends Persona
    {
        private $_legajo; //int
        private $_sueldo; //double
        private $_pathFoto;

        public function __construct($nombre,$apellido,$dni,$sexo,$legajo,$sueldo)
        {
            parent::__construct($nombre,$apellido,$dni,$sexo);
            $this->_legajo = $legajo;
            $this->_sueldo = $sueldo;
        }

        public function getLegajo()
        {
            return $this->_legajo;
        }

        public function getSueldo()
        {
            return $this->_sueldo;
        }

        public function getPathFoto()
        {
            return $this->_pathFoto;
        }

        public function setPathFoto($pathFoto)
        {
            $this->_pathFoto = $pathFoto;
        }

        public function Hablar($idioma)
        {
            return "El empleado habla ".$idioma;
        }

        public function __toString()
        {
            return parent::__toString() . "-" . $this->_legajo . "-" . $this->_sueldo . "-" . $this->_pathFoto . PHP_EOL;
        }

    }
?>