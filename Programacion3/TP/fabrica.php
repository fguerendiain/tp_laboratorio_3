<?php
    include_once "empleado.php";
    class Fabrica
    {
        private $_empleados; //Empleado[]
        private $_razonSocial; //string

        public function __construct($razonSocial)
        {
            $this->_empleados = array();
            $this->_razonSocial = $razonSocial;
        }

        public function AgregarEmpleado($persona)
        {
//            $this_empleados = EliminarEmpleadosRepetidos();
            if(array_push($this->_empleados,$persona))
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        public function CalcularSueldos()
        {
            $sueldos = 0;
            for($i=0;$i < count($this->_empleados) ; $i++)
            {
                $sueldos += ($this->_empleados[$i]->getSueldo());
            }
            return $sueldos;
        }

        public function EliminarEmpleado($persona)
        {
            unset($this->_empleados[array_search($persona,$this->_empleados)]);
            $this->_empleados = array_values($this->_empleados);
        }

        private function EliminarEmpleadosRepetidos()
        {  
            return array_unique($this->_empleados);
        }

        public function __toString()
        {
           $stringFabrica = $this->_razonSocial . " - ";
           for($i=0;$i < count($this->_empleados) ; $i++)
           {
               $stringFabrica =  $stringFabrica . $this->_empleados[$i]->__toString();
           }
           return $stringFabrica;
        }

        public function GuardarFabrica()
        {
            /* Transformar obj a String + separador
                Guardar un obj por renglon */

           $archivo = fopen("fabrica.txt","w");
           fwrite($archivo, $this->_razonSocial);
           fwrite($archivo, "\r\n");
           for($i=0;$i < count($this->_empleados) ; $i++)
           {
               fwrite($archivo,$this->_empleados[$i]->__toString());
               fwrite($archivo, "\r\n");
           }

           fclose($archivo);
        }

        public function RecuperarDatos()
        {
            /* Leer renglon por renglon
               utilizar EXPLODE
               crear obj 
               agregar obj al array
               */
/*
           $archivo = fopen("fabrica.txt","w");
           fgets($archivo,)
           fclose($archivo);
*/        }
    }
?>