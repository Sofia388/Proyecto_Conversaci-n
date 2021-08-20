<?php
         function Autoload($class)
         {
             if(is_file('Controller/'.$class.'.Controller.php'))
             {
               require_once('Controller/'.$class.'.Controller.php');
             }
             else if(is_file('Framework/Smarty/libs/'.$class.'.class.php'))
             {
               require_once('Framework/Smarty/libs/'.$class.'.class.php');
             }
             else if (is_file('Model/'.$class.'.Model.php'))
             {
               require_once('Model/'.$class.'.Model.php');

             }
         }
         spl_autoload_register('Autoload');
?>   

