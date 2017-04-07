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
     //       EliminarEmpleadosRepetidos();
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
            array_unique($this->_empleados);
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
               fwrite($archivo,$this->_empleados[$i]);
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

           $archivo = fopen("fabrica.txt","r");

           $auxFab = new Fabrica(fgets($archivo));
           while(!feof($archivo))
           {
              $auxEmpleado = explode(" - ",fgets($archivo));
              $auxFab->_empleados = new Empleado($auxEmpleado[0],$auxEmpleado[1],$auxEmpleado[2],$auxEmpleado[3],$auxEmpleado[4],$auxEmpleado[5]);
           }

     /*      for($i=0 ; $i<count($auxFab) ; $i++)
           {
               echo($auxFab[$i]);
           }

       */    fclose($archivo);

            return $auxFab;

        }
    }
?>