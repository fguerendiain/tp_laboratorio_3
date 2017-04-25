<?php
    require_once('../AccesoDatos.php');

    class Usuario
    {
        /*-----------ATRIBUTOS-----------*/
        private $_legajo;
        private $_nombre;
        private $_apellido;
        private $_sexo;
        private $_dni;
        private $_fotoPath


        




        /*--------------------------------*/

        /*-----------CONSTRUCTORES-------*/
        public function __construct($legajo = NULL,$nombre= NULL,$apellido= NULL,$sexo= NULL,$dni= NULL,$fotoPath= NULL){
            if($legajo == Null)return;
            if($nombre == Null)return;
            if($apellido == Null)return;
            if($sexo == Null)return;
            if($dni == Null)return;
            if($fotoPath == Null)return;

            $this->_legajo = $legajo;
            $this->_nombre = $nombre;
            $this->_apellido = $apellido;
            $this->_sexo = $sexo;
            $this->_dni = $dni;
            $this->_fotoPath = $fotoPath;
        }
        /*--------------------------------*/

        /*-----------GETERS / SETERS-----------*/
    	public function GetLegajo()
        {
            return $this->_legajo;
        }
        public function GetNombre()
        {
            return $this->_nombre;
        }
        public function GetApellido()
        {
            return $this->_apellido;
        }
        public function GetSexo()
        {
            return $this->_sexo;
        }
        public function GetDni()
        {
            return $this->_dni;
        }
        public function GetFotoPath()
        {
            return $this->_fotoPath;
        }

        //------------

        public function SetLegajo($valor)
        {
            $this->_legajo = $valor;
        }
        public function SetNombre($valor)
        {
            $this->_nombre = $valor;
        }
        public function SetApellido($valor)
        {
            $this->_apellido = $valor;
        }
        public function SetSexo($valor)
        {
            $this->_sexo = $valor;
        }
        public function SetDni($valor)
        {
            $this->_dni = $valor;
        }
        public function SetFotoPath($valor)
        {
            $this->_fotoPath = $valor;
        }
        /*--------------------------------*/


        /*-----------FUNCIONES-----------*/
        public function AltaUsuario(){

        }

        public function BajaUsuario(){

        }

        public function ModificarUsuario(){

        }

        public static function GuardarEnArchivo($obj)
        {
            $resultado = FALSE;
            
            $ar = fopen("../../archivos/usuarios.txt", "a");
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
            $archivo=fopen("../../archivos/usuarios.txt", "r");
            while(!feof($archivo))
            {
                $archAux = fgets($archivo);
                $usuarios = explode(" - ", $archAux);
                //http://www.w3schools.com/php/func_string_explode.asp
                $usuarios[0] = trim($usuarios[0]);
                if($produusuariosctos[0] != ""){
                    $ListaDeUsuariosLeidos[] = new Producto($usuarios[0], $usuarios[1],$usuarios[2],$usuarios[3],$usuarios[4],$usuarios[5]);
                }
            }
            fclose($archivo);
            
            return $ListaDeUsuariosLeidos;
            
        }

        function LeerTodosLosUsuariosDeBD()
        {
            $PDOObject = AccesoDatos::DameUnObjetoAcceso();
            $consulta = $PDOObject->RetornarConsulta('SELECT legajo AS _legajo, nombre AS _nombre, apellido AS _apellido, sexo AS _sexo, dni AS _dni, path_foto AS _fotoPath FROM usuarios');
            $consulta->execute();
            return $usuarios = $consulta->fetchAll(PDO::FETCH_CLASS,"Usuario");
        }
        /*--------------------------------*/

        /*-----------FUNCIONES VIRTUALES---------*/       
        public function ToString()
        {
            return $this->_legajo." - ".$this->_nombre." - ".$this->_apellido." - ".$this->_sexo." - ".$this->_dni." - ".$this->_fotoPath."\r\n";
        /*--------------------------------*/

    }
?>





