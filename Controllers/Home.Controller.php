<?php
// las pestanas superiores

   
    class Home
    {
        public $smarty;

        public function __construct()
        {
            $this->smarty=new Smarty();
        }

        public function Inicio()
        {
            $conex=new Conexion();

            $this->smarty->assign('title',"HOME");
            $this->smarty->display('Home.tpl');
            

            
        }

    }
?>