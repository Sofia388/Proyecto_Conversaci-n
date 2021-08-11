<?php
         function Autoload($class)
         {
             if(is_file('Controllers/'.$class.'.Controller.php'))
             {
               require_once('Controllers/'.$class.'.Controller.php');
             }
             else if(is_file('Framework/Smarty/libs/'.$class.'.class.php'))
             {
               require_once('Framework/Smarty/libs/'.$class.'.class.php');
             }
             else if (is_file('Models/'.$class.'.Model.php'))
             {
               require_once('Models/'.$class.'.Model.php');

             }
         }
         spl_autoload_register('Autoload');
?>   

