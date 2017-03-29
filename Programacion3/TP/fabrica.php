<?php
    include_once "empleado.php";
    class Fabrica
    {
        private $_empleados; //Empleado[]
        private $_razonSocial; //simplexml_load_string

        public function __construct($razonSocial)
        {
            $this->_empleados = new array(Empleado);
            $this->_razonSocial = $razonSocial;
        }

        public function AgregarEmpleado($persona)
        {
            if(array_push($this->_empleados,$persona))
            {
                return true
            }
            else
            {
                return false;
            }
        }

        public function CalcularSueldos()
        {
            $sueldos;
            for($i=0;$i < count($this->_empleados) ; $i++)
            {
                
            }
        }

    }
?>