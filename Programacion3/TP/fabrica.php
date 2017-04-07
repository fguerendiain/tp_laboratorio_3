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

        public function GetRazonSocial()
        {
            return $this->_razonSocial;
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

        public function GuardarFabrica($archivoGuardar)
        {
            /* Transformar obj a String + separador
                Guardar un obj por renglon */
            $archivoGuardar += $archivoGuardar . ".txt";
           $archivo = fopen($archivoGuardar,"w");
           $cont = 0;
           for($i=0;$i < count($this->_empleados) ; $i++)
           {
               if(isset($this->_empleados[$i]))
               {
                   fwrite($archivo,$this->_empleados[$i]->__toString());
                   $cont++;
               }
               echo("contador" .$cont);
           }

           fclose($archivo);
        }

        public function RecuperarDatos($archivoLeer)
        {
            /* Leer renglon por renglon
               utilizar EXPLODE
               crear obj 
               agregar obj al array
               */
           $archivoLeer += $archivoLeer . ".txt";

           $archivo = fopen($archivoLeer,"r");

           while(!feof($archivo))
           {
                if(PHP_EOL)
                {
                    echo("TERMINO<br>");
                    break;
                }

                $linea = fgets($archivo);
                $auxEmpleado = explode(" - ",$linea);
                $array = new Empleado($auxEmpleado[0],$auxEmpleado[1],$auxEmpleado[2],$auxEmpleado[3],$auxEmpleado[4],$auxEmpleado[5]);
                $this->AgregarEmpleado($array);
               echo("Datos leidos y cargados<br>");
           }
           fclose($archivo);

        }
    }
?>