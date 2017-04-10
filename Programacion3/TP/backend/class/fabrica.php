<?php
    include_once "empleado.php";
    class Fabrica
    {
        /*-----------ATRIBUTOS-----------*/
        private $_empleados; //Empleado[]
        private $_razonSocial; //string
        /*--------------------------------*/



        /*-----------CONSTRUCTORES-------*/
        public function __construct($razonSocial)
        {
            $this->_empleados = array();
            $this->_razonSocial = $razonSocial;
        }
        /*--------------------------------*/



        /*-----------GETERS / SETERS-----------*/
        public function GetRazonSocial()
        {
            return $this->_razonSocial;
        }
        /*--------------------------------*/



        /*-----------FUNCIONES-----------*/

        /*
        *<summary>
        *Agrega un empleado a la lista al plantel de la fabrica
        *</summary>      
        */
        public function AgregarEmpleado($persona)
        {
            if(array_push($this->_empleados,$persona))
            {
                echo("Se agrego el empleado: " . $persona->GetNombre() . "<br>");
            }
            $this->EliminarEmpleadosRepetidos();
        }

        /*
        *<summary>
        *Calcula la suma de los sueldos de todos los empleados de la fabrica
        *</summary>      
        *<return>Retorna el valor con de la suma</return>
        */
        public function CalcularSueldos()
        {
            $sueldos = 0;
            for($i=0;$i < count($this->_empleados) ; $i++)
            {
                if(isset($this->_empleados[$i]))
                {
                    $sueldos += ($this->_empleados[$i]->getSueldo());
                }
            }
            return $sueldos;
        }

        /*
        *<summary>
        *Elimina un empleado de la lista del plantel de la fabrica
        *</summary>      
        *<param name=$persona> El objeto empleado a remover </param>
        */
        public function EliminarEmpleado($persona)
        {
            unset($this->_empleados[array_search($persona,$this->_empleados)]);
            $this->_empleados = array_values($this->_empleados);
            echo("Se se elimino el empleado: " . $persona->GetNombre() . "<br><br>");
        }

        /*
        *<summary>
        *Elimina los objetos empleado, que se encuentren repetidos dentro del array
        *</summary>      
        */
        private function EliminarEmpleadosRepetidos()
        {  
            $this->_empleados = array_unique($this->_empleados);
        }

        /*
        *<summary>
        *Guarda los empleados de una fabrica en un archivo de texto
        *</summary>      
        *<param name=$nomArchivo> Un string con el nombre del archivo a guardar sin extencion</param>
        */
        public function GuardarFabrica($nomArchivo)
        {
            /* Transformar obj a String + separador
                Guardar un obj por renglon */

           $nomArchivo.=".txt";

           $archivo = fopen($nomArchivo,"w");
           for($i=0;$i < count($this->_empleados) ; $i++)
           {
               if(isset($this->_empleados[$i]))
               {
                   if(fwrite($archivo,$this->_empleados[$i]->__toString()))
                   {
                       echo("Se guardo el empleado " . $this->_empleados[$i]->__toString() . "<br>");
                   }
                   else
                   {
                       echo("No se guardo el empleado " . $this->_empleados[$i]->__toString() . "<br>");
                   }
               }
           }
           fclose($archivo);
        }

        /*
        *<summary>
        *Lee de un archivo los empleados y los carga en el array de empleados de una fabrica
        *</summary>      
        *<param name=$nomArchivo> Un string con el nombre del archivo a leer sin extencion</param>
        */
        public function RecuperarDatos($nomArchivo)
        {
            /* Leer renglon por renglon
               utilizar EXPLODE
               crear obj 
               agregar obj al array
               */
           $nomArchivo.=".txt";
           $archivo = fopen($nomArchivo,"r");


           while(!feof($archivo))
           {
                $linea = fgets($archivo);

                if(empty($linea))
                {
                    echo("TERMINO<br>");
                    break;
                }

                $auxEmpleado = explode("-",$linea);
                $array = new Empleado($auxEmpleado[0],$auxEmpleado[1],$auxEmpleado[2],$auxEmpleado[3],$auxEmpleado[4],$auxEmpleado[5]);
                $this->AgregarEmpleado($array);
          }
           echo("Datos leidos y cargados<br>");
           fclose($archivo);
        }
        /*--------------------------------*/



        /*-----------FUNCIONES VIRTUALES---------*/        
        public function __toString()
        {
           $stringFabrica = $this->_razonSocial . "<br>";
           for($i=0;$i < count($this->_empleados) ; $i++)
           {
               $stringFabrica =  $stringFabrica . $this->_empleados[$i] . "<br>";
           }
           $stringFabrica = $stringFabrica . "Total de Sueldos: " . $this->CalcularSueldos() . "<br><br>";
           return $stringFabrica;
        }
        /*--------------------------------*/

    }
?>