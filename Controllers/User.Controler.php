<?php

  class User
  {
    public $user;
    public $smarty;

    public function __construct()
    {
      $this->user=new Usuarios();
      $this->smarty=new Smarty();
    }

    public function Inicio()
    {
      $this->smarty->assign('title','Login');
      $this->smarty->display('Inicio.tpl');
    }

    public function IrLogin()
    {
      $this->smarty->assign('title','Login');
      $this->smarty->display('Login.tpl');
    }

    public function IrRegistro()
    {
      $this->smarty->assign('title','Registro');
      $this->smarty->display('Registro.tpl');
    }

    public function RegresoAdministrador()
    {
      $this->smarty->assign('title','Inicio');
      $this->smarty->display('Administrador/Administrador.tpl');
    }

    public function Cerrar()
    {
      $this->smarty->assign('title','Inicio');
      $this->smarty->display('Home.tpl');
    }

    public function Regreso()
    {
      $this->smarty->assign('title','Inicio');
      $this->smarty->display('Cabeceras/Inicio.tpl');
    }

    public function BuscarUsuario()
    {
      $email=$_POST['Depto_idDepto'];
      $pass=$_POST['Contrasena'];

      $us=$this->user->BuscarUser($email,$pass);

            if($us->num_rows==1)
            {
              session_start();
              $usuario=mysqli_fetch_assoc($us);

              $_SESSION['DPI']=$usuario['Codigo_u'];
              $_SESSION['Depto_idDepto']=$usuario['Contrasena'];
      
             if($usuario['idUsuario']==1)
                {
                  $this->smarty->assign('title','Login');
                  $this->smarty->display('Administrador.tpl');
                }
            }
            else if ($us->num_rows>1)
                {
                  echo "mas de un usuario";
                }
            else 
              {
                $this->smarty->assign('title','Login');
                $this->smarty->display('Login.tpl');
                echo "Usuario o contraseña son incorrectos";
              }
    }
    /*public function BuscarUsuario()
    {
      $numUs=$_POST['Depto_idDepto'];
      $pass=$_POST['Contrasena'];

      $us=$this->user->BuscarUser($numUs,$pass);

            if($us->num_rows==1)
            {
              ession_start();
              $usuario=mysqli_fetch_assoc($us);

              ///$_SESSION['DPI']=$numUs[`Codigo_u`];
              $_SESSION['Depto_idDepto']=$usuario['Contrasena'];
      
             if($usuario['Contrasena']==1)
                {
                  $this->smarty->assign('title','Login');
                  $this->smarty->display('Login.tpl');
                }
            }*/
           

    public function GuardarUsuario()
    {
      $correonew=$_POST['email'];
      $nombre=$_POST['nombre'];
      $apellido=$_POST['apellido'];
      $contraseña=$_POST['contrasena'];
      $dep=$_POST['depto_idDepto'];
        

      $user=$this->user->GuardarUser($correo,$nombre,$apellido,$contrasena,$depto_idDepto);

      $this->smarty->assign('title','Login');
      $this->smarty->display('Login.tpl');
    }


  }
    
?>
