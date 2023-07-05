<?php
    class Conexion
    {
        public $enlace;

        public function __contruct()
        {
            $this->enlace = new mysqli("HOST","USER","PASS","DB");
            if ($this->enlace->connect_errno){
                die("Falló la conexión con la Base de Datos: (" . $this->enlace->connect_errno . ")" . $this->enlace->connect_errno);
            }
        }
        public function query($sql)
        {
            return $this->enlace->query($sql);
        }
    }