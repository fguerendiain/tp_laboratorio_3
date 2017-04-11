<?php
    include_once ("usuario.php");
    class Users
    {
        private $_userList;
        private $_system;

        public __construct($system)
        {
            $this->_system = $system;
            $this->_userList = array();
        }

        public function AgregarUsuario($user)
        {
            array_push($_userList,$user);
        }

        public function EliminarUsuario($user)
        {
            unset($this->_userList[array_search($user,$this->_userList)]);
            $this->_userList = array_values($this->_userList);
        }

    }




?>
