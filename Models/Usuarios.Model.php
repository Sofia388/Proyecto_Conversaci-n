<?php
    class Usuarios
    {
        public $con;

        public function __construct()
        {
            $this->con=new Conexion();
        }
            
        public function BuscarUser($numUs, $pass)
        {
            $this->con=new Conexion();
            $sql="SELECT * FROM `trabajador` WHERE `Depto_idDepto` = '$numUs' AND `Contrasena`='$pass';";
            $consulta=$this->con->query($sql);
            $this->con->close();
            return $consulta;
        }

        public function GuardarUser($correo,$nombre,$apellido,$contrase�a,$Depto_idDepto,)
            {
                $this->con=new Conexion();
                $sql="INSERT INTO `trabajador`(`idUsuario`, `Depto_idDepto`, `Estado_idEstado`, `Roles_idRoles`, `Nombre`, `Apellido`,`Correo`) VALUES ('$correo','$nombre','$apellido','$contrase�a','$dDepto_idDepto');"; 
                $consulta=$this->con->query($sql);
                $this->con->close();
                return $consulta;
            }

        public function BuscarTipoUser()
        {
            $this->con=new Conexion();
            $sql= "SELECT * FROM 'blogtipousuario' WHERE 1 ;";
            $consulta=$this->con->query($sql);
            $this->con->close();
            return $consulta;
        }

        