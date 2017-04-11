<?php
    class Usuario
    {
        private $_legajo;
        private $_nombre;
        private $_dni;

        public function __construct($legajo, $nombre, $dni)
        {
            $this->$_legajo = $legajo;
            $this->$_nombre = $nombre;
            $this->$_dni = $dni;
        }
    }

?>