<?php
    abstract class Persona
    {
        protected $_apellido; //string
        protected $_dni; //int
        protected $_nombre; //string
        protected $_sexo; //char

        public function __construct($nombre, $apellido, $dni, $sexo)
        {
            $this->_nombre = $nombre;
            $this->_apellido = $apellido;
            $this->_dni = $dni;
            $this->_sexo = $sexo;
        }

        public function getApellido()
        {
            return $this->_apellido;
        }

        public function getDni()
        {
            return $this->_dni;
        }

        public function getNombre()
        {
            return $this->_nombre;
        }

        public function getSexo()
        {
            switch($this->sexo)
            {
                case "m" : 
                    return 0;

                case "f" : 
                    return 1;
            }
        }

        abstract public function Hablar($idioma);

        public function __toString()
        {
            return $this->_nombre . " - " . $this->_apellido . " - " . $this->_dni . " - " . $this->_sexo;
        }
    }
?>