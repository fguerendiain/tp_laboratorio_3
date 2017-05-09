<?php    

    class Usuario
    {
        /*-----------ATRIBUTOS-----------*/
        public $_clave;
        public $_nombre;
        public $_edad;
        public $_correo;
        /*--------------------------------*/

        /*-----------CONSTRUCTORES-------*/
        public function __construct($clave,$nombre,$correo,$edad){
            $this->_clave = $clave;
            $this->_nombre = $nombre;
            $this->_correo = $correo;
            $this->_edad = $edad;
        }
        /*--------------------------------*/

        /*-----------FUNCIONES-----------*/
        public static function GuardarEnArchivo($obj)
        {
            $resultado = FALSE;
            
            $ar = fopen("usuario.txt", "a");
            $cant = fwrite($ar, $obj->ToString());
            if($cant > 0)
            {
                $resultado = TRUE;			
            }
            fclose($ar);
            return $resultado;
        }

        public static function LeerUsuariosDeArchivo()
        {

            $ListaDeUsuariosLeidos = array();
            $archivo=fopen("usuario.txt", "r");
            while(!feof($archivo))
            {
                $archAux = fgets($archivo);
                $usuarios = explode(" - ", $archAux);
                $usuarios[0] = trim($usuarios[0]);
                if($usuarios[0] != ""){
                    $ListaDeUsuariosLeidos[] = new Usuario($usuarios[0], $usuarios[1],$usuarios[2],$usuarios[3]);
                }
            }
            fclose($archivo);
            
            return $ListaDeUsuariosLeidos;
            
        }
        /*--------------------------------*/

        /*-----------FUNCIONES VIRTUALES---------*/       
        public function ToString()
        {
            return $this->_nombre." - ".$this->_edad." - ".$this->_correo." - ".$this->_clave."\r\n";
        }
        /*--------------------------------*/
        
    }

?>