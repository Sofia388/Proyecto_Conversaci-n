<?php
    class Usuarios
    {
        public $con;

        public function __construct()
        {
            $this->con=new Conexion();
        }
            
        public function BuscarUser($num, $pass)
        {
            $this->con=new Conexion();
            $sql="SELECT * FROM `usuario` WHERE `idUsuario` = '$num' AND `Depto_idDepto`='$pass';";
            $consulta=$this->con->query($sql);
            $this->con->close();
            return $consulta;
        }

        public function GuardarUser($idUsuario, $Depto_idDepto, $Estado_idEstado, $Roles_idRoles, $Nombre, $Apellido, $Correo, $Contrasena)
            {
                $this->con=new Conexion();
                $sql="INSERT INTO `usuario`(`idUsuario`, `Depto_idDepto`, `Estado_idEstado`, `Roles_idRoles`, `Nombre`, `Apellido`, `Correo`, `Contrasena`);"; 
                $consulta=$this->con->query($sql);
                $this->con->close();
                return $consulta;
            }

        public function BuscarTipoUser()
        {
            $this->con=new Conexion();
            $sql= "SELECT * FROM 'sistema_chat' WHERE 1 ;";
            $consulta=$this->con->query($sql);
            $this->con->close();
            return $consulta;
        }

    }

?>
